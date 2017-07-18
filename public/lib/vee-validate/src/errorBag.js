export default class ErrorBag {
  constructor() {
    this.errors = [];
  }

    /**
     * Adds an error to the internal array.
     *
     * @param {string} field The field name.
     * @param {string} msg The error message.
     * @param {String} rule The rule that is responsible for the error.
     * @param {String} scope The Scope name, optional.
     */
  add(field, msg, rule, scope = '__global__') {
    this.errors.push({ field, msg, rule, scope });
  }

    /**
     * Gets all error messages from the internal array.
     *
     * @param {String} scope The Scope name, optional.
     * @return {Array} errors Array of all error messages.
     */
  all(scope) {
    if (! scope) {
      return this.errors.map(e => e.msg);
    }

    return this.errors.filter(e => e.scope === scope).map(e => e.msg);
  }

    /**
     * Checks if there are any errors in the internal array.
     * @param {String} scope The Scope name, optional.
     * @return {boolean} result True if there was at least one error, false otherwise.
     */
  any(scope) {
    if (! scope) {
      return !! this.errors.length;
    }

    return !! this.errors.filter(e => e.scope === scope).length;
  }

    /**
     * Removes all items from the internal array.
     *
     * @param {String} scope The Scope name, optional.
     */
  clear(scope) {
    if (! scope) {
      scope = '__global__';
    }

    this.errors = this.errors.filter(e => e.scope !== scope);
  }

    /**
     * Collects errors into groups or for a specific field.
     *
     * @param  {string} field The field name.
     * @param  {string} scope The scope name.
     * @param {Boolean} map If it should map the errors to strings instead of objects.
     * @return {Array} errors The errors for the specified field.
     */
  collect(field, scope, map = true) {
    if (! field) {
      const collection = {};
      this.errors.forEach(e => {
        if (! collection[e.field]) {
          collection[e.field] = [];
        }

        collection[e.field].push(map ? e.msg : e);
      });

      return collection;
    }

    if (! scope) {
      return this.errors.filter(e => e.field === field).map(e => (map ? e.msg : e));
    }

    return this.errors.filter(e => e.field === field && e.scope === scope)
                      .map(e => (map ? e.msg : e));
  }
    /**
     * Gets the internal array length.
     *
     * @return {Number} length The internal array length.
     */
  count() {
    return this.errors.length;
  }

    /**
     * Gets the first error message for a specific field.
     *
     * @param  {string} field The field name.
     * @return {string|null} message The error message.
     */
  first(field, scope = '__global__') {
    const selector = this._selector(field);
    const scoped = this._scope(field);

    if (scoped) {
      const result = this.first(scoped.name, scoped.scope);
      // if such result exist, return it. otherwise it could be a field.
      // with dot in its name.
      if (result) {
        return result;
      }
    }

    if (selector) {
      return this.firstByRule(selector.name, selector.rule, scope);
    }

    for (let i = 0; i < this.errors.length; i++) {
      if (this.errors[i].field === field && (this.errors[i].scope === scope)) {
        return this.errors[i].msg;
      }
    }

    return null;
  }

    /**
     * Returns the first error rule for the specified field
     *
     * @param {string} field The specified field.
     * @return {string|null} First error rule on the specified field if one is found, otherwise null
     */
  firstRule(field, scope) {
    const errors = this.collect(field, scope, false);

    return (errors.length && errors[0].rule) || null;
  }

    /**
     * Checks if the internal array has at least one error for the specified field.
     *
     * @param  {string} field The specified field.
     * @return {Boolean} result True if at least one error is found, false otherwise.
     */
  has(field, scope = '__global__') {
    return !! this.first(field, scope);
  }

    /**
     * Gets the first error message for a specific field and a rule.
     * @param {String} name The name of the field.
     * @param {String} rule The name of the rule.
     * @param {String} scope The name of the scope (optional).
     */
  firstByRule(name, rule, scope) {
    const error = this.collect(name, scope, false).filter(e => e.rule === rule)[0];

    return (error && error.msg) || null;
  }

    /**
     * Removes all error messages associated with a specific field.
     *
     * @param  {string} field The field which messages are to be removed.
     * @param {String} scope The Scope name, optional.
     */
  remove(field, scope) {
    const filter = scope ? (e => e.field !== field || e.scope !== scope) :
                           (e => e.field !== field || e.scope !== '__global__');

    this.errors = this.errors.filter(filter);
  }


    /**
     * Get the field attributes if there's a rule selector.
     *
     * @param  {string} field The specified field.
     * @return {Object|null}
     */
  _selector(field) {
    if (field.indexOf(':') > -1) {
      const [name, rule] = field.split(':');

      return { name, rule };
    }

    return null;
  }

    /**
     * Get the field scope if specified using dot notation.
     *
     * @param {string} field the specifie field.
     * @return {Object|null}
     */
  _scope(field) {
    if (field.indexOf('.') > -1) {
      const [scope, name] = field.split('.');

      return { name, scope };
    }

    return null;
  }
}

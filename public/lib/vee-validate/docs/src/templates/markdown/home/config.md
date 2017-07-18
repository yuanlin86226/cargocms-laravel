Visit the [rules documentation](rules.html#available-rules) to learn more about how to use each rule, and how to [create your own](rules.html#custom-rules).

## [Configuration](#configuration)

You may need to configure some options to tweak some of the plugin internals, this is not required, but could cause conflicts. For example: if you are using a property called `errors` on your vue instance this may cause conflicts. Here is how you would set up the options along with the default values:

```js
import Vue from 'vue';
import VeeValidate from 'vee-validate';

const config = {
  errorBagName: 'errors', // change if property conflicts.
  fieldsBagName: 'fields', 
  delay: 0, 
  locale: 'en', 
  dictionary: null, 
  strict: true, 
  enableAutoClasses: false, 
  classNames: {
    touched: 'touched', // the control has been blurred
    untouched: 'untouched', // the control hasn't been blurred
    valid: 'valid', // model is valid
    invalid: 'invalid', // model is invalid
    pristine: 'pristine', // control has not been interacted with
    dirty: 'dirty' // control has been interacted with
  },
  events: 'input|blur',
  inject: true
};

Vue.use(VeeValidate, config);
```

<table class="table">
    <thead>
        <tr>
            <th>Config Name</th>
            <th>Default</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="is-method-name">errorBagName</td>
            <td>errors</td>
            <td>The name of the ErrorBag object that will be injected in each of Vue's instances' data.</td>
        </tr>
        <tr>
            <td class="is-method-name">fieldsBagName</td>
            <td>fields</td>            
            <td>The name of the Fields (flags) object that will be injected in each of Vue's instances' data.</td>
        </tr>
        <tr>
            <td class="is-method-name">delay</td>
            <td>0</td>
            <td>The default debounce time for all inputs (only affects validations).</td>
        </tr>
        <tr>
            <td class="is-method-name">locale</td>
            <td>en</td>
            <td>The default language for the validation messages.</td>
        </tr>
        <tr>
            <td class="is-method-name">dictionary</td>
            <td>null</td>
            <td>  
              A dictionary to be merged with the validators dictionary, check [custom messages](rules.html#custom-messages) and [localization](localization.html) sections.
            </td>
        </tr>
        <tr>
            <td class="is-method-name">strict</td>
            <td>true</td>
            <td>Fields that have no rules will fail validation unless `strict` is set to false.</td>
        </tr>
        <tr>
            <td class="is-method-name">enableAutoClasses</td>
            <td>false</td>
            <td>Applies automatic classes on inputs or components root elements being validated.</td>
        </tr>
        <tr>
            <td class="is-method-name">classNames</td>
            <td>
              <code-block>
                  {
                    touched: 'touched', // the control has been blurred
                    untouched: 'untouched', // the control hasn't been blurred
                    valid: 'valid', // model is valid
                    invalid: 'invalid', // model is invalid
                    pristine: 'pristine', // control has not been interacted with
                    dirty: 'dirty' // control has been interacted with
                  }
              </code-block>
            </td>
            <td>The classes to be applied depending on the state of the input.</td>
        </tr>
        <tr>
            <td class="is-method-name">events</td>
            <td>input|blur</td>
            <td>Pipe seperated list of the default event names that will be listened for to trigger validation, if empty string is provided it will disable all listeners.</td>
        </tr>
        <tr>
            <td class="is-method-name">inject</td>
            <td>true</td>
            <td>
              Specifies if a validator instance should be injected automatically for all components, check [Component Injections](advanced#injections) for more informatin.
            </td>
        </tr>
    </tbody>
</table>

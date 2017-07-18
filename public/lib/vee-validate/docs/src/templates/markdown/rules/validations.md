> Date validators always require the `date_format` rule to be always present and must preceed them in the rules order. The date validators are not enabled by default, they require [momentjs](http://momentjs.com) in order to work. If your setup contains momentjs globally, it will be installed automatically for all validator instances. Otherwise you may want to pass the moment reference to `installDateTimeValidators(moment)` which is available both statically and on instances. Also note that the date validators always use the ['strict' moment parsing mode](http://momentjs.com/guides/#/parsing/strict-mode/).
  
> In the rule signature required parameters are enclosed within `{}` like this: `{param}`. Optional parameters have a `?` at the end: `{optional?}`. Lists are enclosed withn brackets `[]`. ex: `[list]`.</note>

### [after:{target}](#rule-after)

The field under validation must have a valid date and is after the date value in the target field.

- `target:` The input name to be validated against. Must have the same format as the date_format rule.

<input v-validate="'date_format:DD/MM/YYYY|after:after_field_target'" :class="{'input': true, 'is-danger': errors.has('after_field') }" name="after_field" type="text" placeholder="DD/MM/YYYY">
<span v-show="errors.has('after_field')" class="help is-danger">{{ errors.first('after_field') }}</span>

<input name="after_field_target" :class="{'input': true, 'is-danger': errors.has('after_field') }" type="text" placeholder="DD/MM/YYYY">

### [alpha](#rule-alpha)

The field under validation may only contain alphabetic characters.

<input v-validate="'alpha'" :class="{'input': true, 'is-danger': errors.has('alpha_field') }" name="alpha_field" type="text" placeholder="Enter Some Characters...">
<span v-show="errors.has('alpha_field')" class="help is-danger">{{ errors.first('alpha_field') }}</span>

### [alpha_dash](#rule-alpha_dash)

The field under validation may contain alphabetic characters, numbers, dashes or underscores.

<input v-validate="'alpha_dash'" :class="{'input': true, 'is-danger': errors.has('alpha_dash_field') }" name="alpha_dash_field" type="text" placeholder="Enter characters or dashes">
<span v-show="errors.has('alpha_dash_field')" class="help is-danger">{{ errors.first('alpha_dash_field') }}</span>

### [alpha_num](#rule-alpha_num)

The field under validation may contain alphabetic characters or numbers.

<input v-validate="'alpha_num'" :class="{'input': true, 'is-danger': errors.has('alpha_num_field') }" name="alpha_num_field" type="text" placeholder="Enter characters and numbers">
<span v-show="errors.has('alpha_num_field')" class="help is-danger">{{ errors.first('alpha_num_field') }}</span>

### [alpha_spaces](#rule-alpha_spaces)

The field under validation may contain alphabetic characters or spaces.

<input v-validate="'alpha_spaces'" :class="{'input': true, 'is-danger': errors.has('alpha_spaces_field') }" name="alpha_spaces_field" type="text" placeholder="Enter characters and spaces">
<span v-show="errors.has('alpha_spaces_field')" class="help is-danger">{{ errors.first('alpha_spaces_field') }}</span>

### [before:{target}](#rule-before)

The field under validation must have a valid date and is before the date value in the target field.

<input v-validate="'date_format:DD/MM/YYYY|before:before_field_target'" :class="{'input': true, 'is-danger': errors.has('before_field') }" name="before_field" type="text" placeholder="DD/MM/YYYY">
<span v-show="errors.has('before_field')" class="help is-danger">{{ errors.first('before_field') }}</span>

<input name="before_field_target" :class="{'input': true, 'is-danger': errors.has('alpha_field') }" type="text" placeholder="DD/MM/YYYY">

### [between:{min},{max}](#rule-between)

The field under validation must have a numeric value bounded by a minimum value and a maximum value.

- `min:` The minimum value.
- `max:` The maximum value.

<input v-validate="'between:1,11'" :class="{'input': true, 'is-danger': errors.has('between_field') }" name="between_field" type="text" placeholder="Enter a number between 1 and 11">
<span v-show="errors.has('between_field')" class="help is-danger">{{ errors.first('between_field') }}</span>

### [confirmed:{target}](#rule-confirmed)

The field under validation must have the same value as the confirmation field.

- `target:` The name of the confirmation field.

<input v-validate="'confirmed:pw_confirm'" :class="{'input': true, 'is-danger': errors.has('confirm_field') }" name="confirm_field" type="password" placeholder="Enter The Password">
<span v-show="errors.has('confirm_field')" class="help is-danger">{{ errors.first('confirm_field') }}</span>

<input name="pw_confirm" :class="{'input': true, 'is-danger': errors.has('confirm_field') }" type="password" placeholder="Confirm the password">

### [credit_card](#rule-credit_card)

The field under validation must be a valid credit card.

<input v-validate="'credit_card'" :class="{'input': true, 'is-danger': errors.has('credit_field') }" name="credit_field" type="text" placeholder="Enter A Credit Card Number">
<span v-show="errors.has('credit_field')" class="help is-danger">{{ errors.first('credit_field') }}</span>

### [date_between:{min,max}](#rule-date_between)

The field under validation must be a valid date between the two dates specified.

- `min:`The minimum allowed value for date. Must be in the same format as the date_format rule.
- `max:`The maximum allowed value for date. Must be in the same format as the date_format rule.

<input v-validate="'date_format:DD/MM/YYYY|date_between:10/09/2016,20/09/2016'" :class="{'input': true, 'is-danger': errors.has('date_between_field') }" name="date_between_field" type="text" placeholder="DD/MM/YYYY betweem 10/09/2016 and 20/09/2016">
<span v-show="errors.has('date_between_field')" class="help is-danger">{{ errors.first('date_between_field') }}</span>

### [date_format:{format}](#rule-date_format)

The field under validation must be a valid date in the specified format. This rule must be present when using any date rule.

- `format:` The date format. See [momentjs parsing.](http://momentjs.com/docs/#/parsing/string-format/)

<input v-validate="'date_format:DD/MM/YYYY'" :class="{'input': true, 'is-danger': errors.has('date_format_field') }" name="date_format_field" type="text" placeholder="DD/MM/YYYY">
<span v-show="errors.has('date_format_field')" class="help is-danger">{{ errors.first('date_format_field') }}</span>

### [decimal:{decimals?}](#rule-decimal)

The field under validation must be numeric and may contain the specified amount of decmial point.

- `decmials:` The maximum allowed number of decimal point numbers. Not passing the decmials will accept numeric data which may or may not contain decimal point numbers.

<input v-validate="'decimal:3'" :class="{'input': true, 'is-danger': errors.has('decimal_field') }" name="decimal_field" type="text" placeholder="Numeric value with decimals">
<span v-show="errors.has('decimal_field')" class="help is-danger">{{ errors.first('decimal_field') }}</span>

### [digits:{length}](#rule-digits)

The field under validation must be numeric and have the specified number of digit.

- `length:` The number of digits.

<input v-validate="'digits:3'" :class="{'input': true, 'is-danger': errors.has('digits_field') }" name="digits_field" type="text" placeholder="Enter 3 digit number">
<span v-show="errors.has('digits_field')" class="help is-danger">{{ errors.first('digits_field') }}</span>

### [dimensions:{width},{height}](#rule-dimensions)

The file added to the field under validation must be an image (jpg,svg,jpeg,png,bmp,gif) have the exact specified dimension.

- `width:` The width of the image.
- `height:` The height of the image.

<input v-validate="'dimensions:30,30'" data-vv-as="image" name="dimensions_field" type="file">
<span v-show="errors.has('dimensions_field')" class="help is-danger">{{ errors.first('dimensions_field') }}</span>

### [email](#rule-email)

The field under validation must be a valid email.

<input v-validate="'email'" data-vv-as="email" :class="{'input': true, 'is-danger': errors.has('email_field') }" name="email_field" type="text" placeholder="Your Email">
<span v-show="errors.has('email_field')" class="help is-danger">{{ errors.first('email_field') }}</span>

### [ext:[extensions]](#rule-ext)

The file added the field under validation must have one of the extensions specified.

- `extensions:` Comma separated list of extensions. ex: `ext:jpg,png,bmp,svg

<input v-validate="'ext:jpeg,jpg'" data-vv-as="field" name="ext_field" type="file">
<span v-show="errors.has('ext_field')" class="help is-danger">{{ errors.first('ext_field') }}</span>

### [image](#rule-image)

The file added the field under validation must have an image mime type (image/*).

<input v-validate="'image'" data-vv-as="image" name="image_field" type="file">
<span v-show="errors.has('image_field')" class="help is-danger">{{ errors.first('image_field') }}</span>

### [in:[list]](#rule-in)

The field under validation must have a value that is in the specified list.

- `list:` Comma separated list of values. ex `in:1,2,3`

<span class="select">
  <select v-validate="'in:1,2,3'" :class="{ 'is-danger': errors.has('in_field') }" name="in_field" data-vv-as="selected">
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    <option value="4">Invalid</option>
  </select>
</span>
<span v-show="errors.has('in_field')" class="help is-danger">{{ errors.first('in_field') }}</span>
### [ip](#rule-ip)
The field under validation must have a string that is a valid ipv4 value.

<input v-validate="'ip'" data-vv-as="ip" :class="{'input': true, 'is-danger': errors.has('ip_field') }" name="ip_field" type="text" placeholder="Your IP Address">
<span v-show="errors.has('ip_field')" class="help is-danger">{{ errors.first('ip_field') }}</span>

### [max:{length}](#rule-max)

The field under validation length may not exceed the specified length.

- `length:` A numeric value representing the maximum number of characters.

<input v-validate="'max:11'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('max_field') }" name="max_field" type="text" placeholder="11 Characters or shorter">
<span v-show="errors.has('max_field')" class="help is-danger">{{ errors.first('max_field') }}</span>

### [max_value:{value}](#rule-max_value)

The field under validation must be numeric value and must not be greater than the specified value.

- `value:` A numeric value representing the greatest value allowed.

<input v-validate="'max_value:9000'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('max_value_field') }" name="max_value_field" type="text" placeholder="Can you go over 9000?">
<span v-show="errors.has('max_value_field')" class="help is-danger">{{ errors.first('max_value_field') }}</span>

### [mimes:[list]](#rule-mimes)

The file type added to the field under validation should have one of the specified mime types.

- `list:` List of comma separated mime types. `mimes:image/jpeg,image/png`

<label class="label">Image File</label>
<input v-validate="'mimes:image/*'" data-vv-as="image" name="mimes_field" type="file">
<span v-show="errors.has('mimes_field')" class="help is-danger">{{ errors.first('mimes_field') }}</span>

> You can use '*' to specify a wild card, something like `mimes:image/*` will accept all image types.

### [min:{length}](#rule-min)

The field under validation length should not be less than the specified length.

- `length:` A numeric value representing the minimum number of characters.

<input v-validate="'min:3'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('min_field') }" name="min_field" type="text" placeholder="Min: 3">
<span v-show="errors.has('min_field')" class="help is-danger">{{ errors.first('min_field') }}</span>

### [min_value:{value}](#rule-min_value)

The field under validation must be numeric value and must not be less than the specified value.

- `value:` A numeric value representing the lowest value allowed.

<input v-validate="'min_value:10'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('min_value_field') }" name="min_value_field" type="text" placeholder="What is bigger than 10?">
<span v-show="errors.has('min_value_field')" class="help is-danger">{{ errors.first('min_value_field') }}</span>

### [not_in:[list]](#rule-not_in)

The field under validation length should not have any value within the specified value.

- `list:` Comma separated list of invalid values. ex: `not_in:1,2,3`

<span class="select">
  <select v-validate="'not_in:1,2,3'" :class="{ 'is-danger': errors.has('not_in_field') }" name="not_in_field" data-vv-as="selected">
    <option value="1">One - Invalid</option>
    <option value="2">Two - Invalid</option>
    <option value="3">Three - Invalid</option>
    <option value="4">Four - Valid</option>
  </select>
</span>
<span v-show="errors.has('not_in_field')" class="help is-danger">{{ errors.first('not_in_field') }}</span>

### [numeric](#rule-numeric)

The field under validation must only consist of numbers.

<input v-validate="'numeric'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('numeric_field') }" name="numeric_field" type="text" placeholder="Numbers only">
<span v-show="errors.has('numeric_field')" class="help is-danger">{{ errors.first('numeric_field') }}</span>

### [regex:{pattern}](#rule-regex)

The field under validation must match the specified regular expression.

- `pattern:` A regular expression
- `flags:` list of regular expression flags (optional)

<label class="label">Regex: ^([0-9]+)$</label>
<input v-validate="'regex:^([0-9]+)$'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('regex_field') }" name="regex_field" type="text" placeholder="Numbers only">
<span v-show="errors.has('regex_field')" class="help is-danger">{{ errors.first('regex_field') }}</span>

> You should not use the pipe '|' or commas ',' within your regular expression when using the string rules format as it will cause a conflict with how validators parsing work. You should use the object format of the rules instead, for example: `v-validate="{ rules: { regex: /.(js|ts)$/} }"`

### [required](#rule-required)

The field under validation must have a non-empty value. By default all validators pass the validation if they have "empty values" unless they are required. Those empty values are: empty string, undefined, null.

<input v-validate="'required'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('required_field') }" name="required_field" type="text" placeholder="Is Required">
<span v-show="errors.has('required_field')" class="help is-danger">{{ errors.first('required_field') }}</span>

### [size:{kb}](#rule-size)

The file size added to the field under validation must not exceed the specified size in kilobytes.

- `size:` The maximum file size in kilobytes.

<input v-validate="'size:10'" name="size_field" data-vv-as="file" type="file">
<span class="help is-danger" v-show="errors.has('size_field')">{{ errors.first('size_field') }}</span>

### [url:{require_protocol?}](#rule-url)

The field under validation must be a valid url. Protocols are not required by default.

- `require_protocol:` If the protocol should be required, false by default. passing anything will require it.

<input v-validate="'url:require_protocol'" data-vv-as="field" :class="{'input': true, 'is-danger': errors.has('url_field') }" name="url_field" type="text" placeholder="Enter a url">
<span v-show="errors.has('url_field')" class="help is-danger">{{ errors.first('url_field') }}</span>

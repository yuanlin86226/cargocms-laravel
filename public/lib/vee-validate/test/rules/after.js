import test from 'ava';
import moment from 'moment';
import after from './../../src/plugins/date/after';
import helpers from './../helpers';

const validate = after(moment);

test('sets the format and inclusion params if not passed', t => {
  const format = 'DD/MM/YYYY';
  t.true(validate('12/09/2016', ['11/09/2016', format]));
  t.false(validate('10/09/2016', ['11/09/2016', format]));
});

test('checks if a date is after another date', t => {
  const format = 'DD/MM/YYYY';
  helpers.querySelector({ name: 'otherField', value: '11/09/2016' });
  t.true(validate('12/09/2016', ['otherField', false, format]));
  t.false(validate('10/09/2016', ['otherField', false, format]));

  // test inclusion
  helpers.querySelector({ name: 'otherField', value: '11/09/2016' });
  t.true(validate('11/09/2016', ['otherField', true, format]));
  t.false(validate('11/09/2016', ['otherField', false, format]));
});

test('it accepts dates instead of fields', t => {
  const format = 'DD/MM/YYYY';
  t.true(validate('12/09/2016', ['11/09/2016', false, format]));
  t.false(validate('10/09/2016', ['11/09/2016', false, format]));

  // test inclusion
  t.true(validate('12/09/2016', ['12/09/2016', true, format]));
  t.false(validate('10/09/2016', ['10/09/2016', false, format]));
});

test('fails validation if any date is invalid', t => {
  const format = 'DD/MM/YYYY';
  helpers.querySelector({ name: 'otherField', value: '11/15/2016' });
  t.false(validate('12/09/2016', ['otherField', false, format]));

  helpers.querySelector({ name: 'otherField', value: '11/10/2016' });
  t.false(validate('31/09/2016', ['otherField', false, format])); // invalid value.
});

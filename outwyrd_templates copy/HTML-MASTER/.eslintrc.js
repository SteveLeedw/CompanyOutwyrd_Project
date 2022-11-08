// https://eslint.org/docs/user-guide/configuring

module.exports = {
  env: {
    browser: true,
    commonjs: true,
    es6: true,
    jquery: true

  },
  extends: [
    // https://github.com/eslint/eslint/blob/master/conf/eslint-recommended.js
    'eslint:recommended',
  ],
  parser: 'babel-eslint',
  parserOptions: {
    ecmaVersion: 6,
    sourceType: 'module',
  },
  // add your custom rules here
  rules: {
    'no-undef': 'off',
    'no-console': 'warn',
    //  indent: ['warn', 2],
    // "no-unused-vars": 0,
    // "no-redeclare": 2,
    // "no-redeclare": ["error", { "builtinGlobals": false }],
    "no-mixed-spaces-and-tabs": 0, // disable rule
    "no-redeclare": ["error", { "builtinGlobals": true }],

    "no-unused-vars": ["error", { "vars": "all", "args": "all", "ignoreRestSiblings": false }]
  },
  // do not need if you using rule: 'no-undef':'off'
  // globals: {
  //   module: true,
  //   jQuery: true,
  //   $: true,
  // },
}

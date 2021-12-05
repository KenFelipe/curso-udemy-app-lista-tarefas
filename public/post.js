/**
 * Sends a request to the specified url from a form.
 * This will change window location.
 * @params {string} path the path to send request to
 * @params {object} params the parameters to add to the url
 * @params {string} [method=post] the method to use on the form
 */
function post(path, params, method = 'post') {
  const form = document.createElement('form');
  form.action = path;
  form.method = method;

  for (const key in params) {
    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.name = key;
    hiddenField.value = params[key];

    form.appendChild(hiddenField);
  }

  document.body.appendChild(form);
  form.submit();
}

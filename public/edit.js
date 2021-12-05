/**
 * Create form to edit and update Todo
 * @params {string} path the path to send request to
 * @params {number} id the target Todo id
 * @params {string} currentTodo the current Todo text
 */
function edit(path, id, currentTodo) {
  const form = document.createElement('form');
  form.action = path;
  form.method = 'post';

  const formGroup = document.createElement('div');
  formGroup.className = 'form-group'

  const hiddenField = document.createElement('input');
  hiddenField.type = 'hidden';
  hiddenField.name = 'id';
  hiddenField.value = id;

  const input = document.createElement('input');
  input.type = 'text';
  input.name = 'todo';
  input.value = currentTodo;
  input.className = 'form-control';

  const button = document.createElement('button');
  button.type = 'submit';
  button.innerText = 'Update';
  button.className = "btn btn-success";

  formGroup.appendChild(hiddenField);
  formGroup.appendChild(input);
  form.appendChild(formGroup);
  form.appendChild(button);

  const target = document.getElementById(`todo_${id}`);
  target.innerHTML = '';
  target.appendChild(form);
}

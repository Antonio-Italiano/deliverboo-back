// // Prendo tutti i bottoni dal dom
// const deleteForms = document.querySelectorAll('.delete-form');
// deleteForms.forEach(form => {
//   form.addEventListener('submit', e => {
//     e.preventDefault();
//     const entity = form.getAttribute('data-entity') || 'elemento';
//     const hasConfirmed = confirm(`Sei sicuro di voler cancellare questo ${entity}?`);
//     if (hasConfirmed) form.submit();
//   });
// });
   const modal = document.getElementById('crud-modal');

   const modalToggleButton = document.querySelector('[data-modal-toggle="crud-modal"]');

   const closeButton = modal.querySelector('[data-modal-toggle="crud-modal"]');

   modalToggleButton.addEventListener('click', () => {
       modal.classList.toggle('hidden');
   });

   closeButton.addEventListener('click', () => {
       modal.classList.add('hidden');
   });
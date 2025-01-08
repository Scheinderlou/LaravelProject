function populateEditModal(department_id, department_name) {
    
    document.getElementById('edit_department_id').value = department_id;
    document.getElementById('edit_department_name').value = department_name;
    
    let form = document.querySelector('#edit-department-modal form');
    form.action = `/department/${department_id}/update`;  
}
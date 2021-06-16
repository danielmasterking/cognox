function record() {
    
  const data = new FormData();
  data.append('account_prop', document.getElementById('account_prop').value);
  data.append('value_prop', document.getElementById('value_prop').value);
  data.append('id_user', document.getElementById('id_user').value);
  
  fetch('/api/record',{
    method: 'POST',
    body :data
  })
  .then(response=>response.json())
  .then(function(datos){
    swal("Consignacion exitosa", "", "success");
    document.getElementById('account_prop').value = '';
    document.getElementById('value_prop').value = '';
  });
}
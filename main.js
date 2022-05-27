const openEditFolderModal = (folderName) => {
  const modal = document.getElementById('exampleModalCenter');
  $('#exampleModalCenter').modal('show');
  const inputFolderName = document.getElementById('inputOldName');
  inputFolderName.value = folderName;
  modal.style.display = 'block';
}
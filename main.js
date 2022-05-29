const openEditFolderModal = (folderName) => {
  const modal = document.getElementById("exampleModalCenter");
  $("#exampleModalCenter").modal("show");
  const inputOldName = document.getElementById("inputOldName");
  inputOldName.value = folderName;
};


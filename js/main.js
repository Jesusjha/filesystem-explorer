const newFolderBtn = document.getElementById("newFolderBtn");
const createFolderBtn = document.getElementById("createFolderBtn");
const folderContainer = document.getElementById("folderContainer");

createFolderBtn.addEventListener("click", displayFolder);

function displayFolder() {
  let folderName = document.getElementById("folderName");

  folderContainer.innerHTML += `<div class="col-12 col-lg-4">
    <div class="card shadow-none border radius-15">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="font-30 text-primary"><i class="bx bxs-folder"></i>
                </div>
                <div class="user-groups ms-auto">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="35"
                        height="35" class="rounded-circle" alt="">
                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35"
                        height="35" class="rounded-circle" alt="">
                </div>
                <div class="user-plus">+</div>
            </div>
            <h6 class="mb-0 text-primary">${folderName.value}</h6>
            <small>15 files</small>
        </div>
    </div>
</div>`;

  localStorage.setItem("newFolder", folderContainer.innerHTML);
}

window.onload = () => {
  getData();
};

function getData() {
  if (localStorage.getItem("newFolder") !== null) {
    folderContainer.innerHTML = localStorage.getItem("newFolder");
  }
}

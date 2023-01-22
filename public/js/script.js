var editPopUp = document.getElementById('editPopUp');
var deletePopUp = document.getElementById('deletePopUp');
var contentEdit = document.getElementById('contentEdit');
var formEdit = document.getElementById('formEdit');
var deleteForm = document.getElementById('deleteForm');

var editField = document.getElementById('edit-text');
var info = JSON.parse(document.getElementById('info').value); 



function openEditPopUp(btnId){
    editPopUp.className = "openEdit";
    formEdit.setAttribute("action", "/task/"+btnId.value+"/edit");

    for(var x = 0; x < info.length; x++){
        if(info[x]['id'] == btnId.value){
            contentEdit.innerHTML = `
                <h1 class="heading-card-form">Edit data</h1>
                <input id="edit-text" class="input-text" type="text" name="task" value="${info[x]['task']}">
                <div class="btns-form">
                    <button class="answ-btn" type="submit" name="save">Save</button>
                    <button class="answ-btn" type="button" onclick="closeEditPopUp();" name="button">Exit</button>
                </div>
            `;
        }
    }
}
function closeEditPopUp(){
    editPopUp.className = "closeEdit";
}
function openDeletePopUp(btnId){
    deleteForm.setAttribute("action", "/task/"+btnId.value+"/delete");
    deletePopUp.className = "openDelete";
}
function closeDeletePopUp(){
    deletePopUp.className = "closeDelete";
}
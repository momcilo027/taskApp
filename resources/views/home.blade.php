@include('includes.header')

  <div class="main-container">
    <input id="info" type="hidden" value="{{$tasks}}">
    <div id="editPopUp" class="closeEdit">
      <div class="card">
        <form id="formEdit" class="card-form" method="post">
          @csrf
          @method('PUT')
            <div id="contentEdit">

            </div>
        </form>
    </div>
    </div>
    <div id="deletePopUp" class="closeDelete">
      <div class="card">
        <form id="deleteForm" class="card-form" method="post">
          @csrf
          @method('DELETE')
          <h1 class="heading-card-form">Delete data</h1>
          <h1 class="italic-head">Are you sure you want to delete this task?</h1>
          <div class="btns-form">
            <button class="answ-btn" type="submit" name="button">Yes</button>
            <button class="answ-btn" type="button" onclick="closeDeletePopUp();" name="button">No</button>
          </div>
        </form>
      </div>
    </div>
    <div class="toDo-container">
      <h1 class="toDo-head">Daily tasks</h1>
      <div class="task-input">
        <form class="" action="/tasks" method="post">
          @csrf
          <input class="input-text" type="text" name="task" value="" placeholder="Insert a new task..." autocomplete="off">
          <button class="btn-add" type="submit" name="addBtn"><i class="fa-solid fa-2x fa-plus"> ADD</i></button>
        </form>
      </div>
      <div class="tasks">
        <input type="hidden" id="tasksNum" value="5">
        @foreach($tasks as $row => $task)
        <div class="task">
          <h1 class="task-number">#{{$row+1}}</h1>
          <p class="task-text">{{$task['task']}}</p>
          <form class="actions" method="GET">
            <button id="edit-btn" class="edit" type="button" onclick="openEditPopUp(this)" name="edit" value="{{$task['id']}}"><i class="fa-solid fa-2x fa-pen-to-square"></i></button>
            <button class="delete" type="button" onclick="openDeletePopUp(this);" name="delete" value="{{$task['id']}}"><i class="fa-solid fa-2x fa-delete-left"></i></button>
          </form>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @include('includes.footer')
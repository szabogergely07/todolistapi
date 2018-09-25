@extends('layout.app')

@section('content')


<div class="cont_principal">
<div class="cont_centrar">

  <div class="cont_todo_list_top">
  <div class="cont_titulo_cont">
    <h3>THINGS TO DO</h3>
    </div>
<div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><i class="material-icons">New</i></a>
    </div>

 
<!--   End cont_todo_list_top  -->  </div>

<form>

<div class="cont_crear_new">
  <table class="table">
<tr>
  <th>Action</th>
  <th>Title</th>
 <th>Date</th>
    </tr>
    <tr>
    <td><select name="category" id="action_select">
 <option value="SHOPPING">SHOPPING</option>
 <option value="WORK">WORK</option> <option value="SPORT">SPORT</option> <option value="MUSIC">MUSIC</option> 
      </select>
<!-- End td 1 -->
      </td>
       <td>
<input type="text" name="title" class="input_title_desc" />      

         <!-- End td 2 -->
      </td>
    <td>
<input name="date" type="date" class="input_description_title"  id="date_select">
 
      <!-- End td 3 -->
      </td>
    </tr>
<tr>
   <th class="titl_description" >Description</th>
    </tr>
<tr>

  <td colspan="3">
  <input type="text" name="description" class="input_description" required />
  </td>
    </tr>
    <tr>
    <td colspan="3">
  <button id="todoSubmit" class="btn_add_fin"  onclick="add_to_list()">ADD</button>
  </td>
    </tr>
  </table>
  <!--   End cont_crear_new  --> 
  </div>
  


  
  </form>
  <!--   End cont_central  -->
  </div>
</div>

@endsection
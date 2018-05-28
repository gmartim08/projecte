@extends('layouts.app')

@include("error")

    @section('content')
    @if (Route::has('login') && Auth::user()['rol']=='1')
  <body>
    <div class="container">
      <h2>Crear una Factura</h2><br/>
      <form method="post" action="{{url('factures')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="customer_name">customer_name:</label>
            <select name="customer_name">
                  @foreach($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>

                  @endforeach
                </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="customer_identity">customer_identity:</label>
              <input type="text" class="form-control" name="customer_identity">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>customer_identity_type</lable>
                <select name="customer_identity_type">
                  <option value="NIF">NIF</option>
                  <option value="NIE">NIE</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="serial">serial:</label>
              <input type="text" class="form-control" name="serial">
            </div>
          </div>  
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">number:</label>
              <input type="text" class="form-control" name="number">
            </div>
        </div>        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">date:</label>
              <input type="text" class="form-control" name="date">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="total_net_amount">total_net_amount:</label>
              <input type="text" class="form-control" name="total_net_amount">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="total_amount">total_amount:</label>
              <input type="text" class="form-control" name="total_amount">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="included_vat">included_vat:</label>
              <input type="text" class="form-control" name="included_vat">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="observations">observations:</label>
              <input type="text" class="form-control" name="observations">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lines">lines:</label>
              <input type="text" class="form-control" name="lines" value="1">
            </div>
        </div>
        <div id="input1" class="clonedInput">
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <h4>Nou producte</h3></br>
                <label for="facturaID">facturaID</label>
                <input type="text" name="facturaID1" id="facturaID1" class="form-control" />
              </div>
            </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="description">description</label>
                <input type="text" name="description1" id="description1" class="form-control" />
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="units">units</label>
                <input type="text" name="units1" id="units1" class="form-control"/>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="unit_price">unit_price</label>
                <input type="text" name="unit_price1" id="unit_price1" class="form-control" onchange="calcul(this)" />
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="unit_price">total_line</label>
                <input type="text" name="total_line1" id="total_line1" class="form-control"/>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="taxa">taxa</label>
                <input type="text" name="taxa1" id="taxa1" class="form-control" onchange="calcul(this)"/>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="price_cost">price_cost</label>
                <input type="text" name="price_cost1" id="price_cost1" class="form-control"/>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="linea">linea</label>
                <input type="text" name="linea1" id="linea1" class="form-control"/>
              </div>
            </div>
          </div>
         <div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label>Vols afegir mes linies?</label>
                <input type="button" id="btnAdd" value="+" />
                <input type="button" id="btnDel" value="-" />
              </div>
            </div>            
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="send">send:</label>
              <input type="text" class="form-control" name="send">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Crear</button>
          </div>
        </div>        
      </form>      
    </div>      
  </body>
@endif
@endsection
@section('script')     
        <script type="text/javascript">
          $(document).ready(function() {
            $('#btnAdd').click(function() {
                var num     = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
                var newNum  = new Number(num + 1);      // the numeric ID of the new input field being added
 
                // create the new element via clone(), and manipulate it's ID using newNum value
                var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
 
                // manipulate the name/id values of the input inside the new element
                //newElem.children(':first').attr('id', 'name' + newNum).attr('name', 'name' + newNum);


                $.each(newElem.children(), function(i, item){
                  $(item).children().find("input[name='facturaID"+num+"']").attr("name", "facturaID"+newNum);
                  $(item).children().find("input[name='description"+num+"']").attr("name", "description"+newNum);
                  $(item).children().find("input[name='units"+num+"']").attr("name", "units"+newNum);
                  $(item).children().find("input[name='unit_price"+num+"']").attr("name", "unit_price"+newNum);
                  $(item).children().find("input[name='total_line"+num+"']").attr("name", "total_line"+newNum);
                  $(item).children().find("input[name='taxa"+num+"']").attr("name", "taxa"+newNum);
                  $(item).children().find("input[name='price_cost"+num+"']").attr("name", "price_cost"+newNum);
                  $(item).children().find("input[name='linea"+num+"']").attr("name", "linea"+newNum);


                  //$(input).attr('name', 'description' + descriptionNum);
                });

 
                // insert the new element after the last "duplicatable" input field
                $('#input' + num).after(newElem);
 
                // enable the "remove" button
                $('#btnDel').prop('disabled',false);
 
                // business rule: you can only add 10 names
                if (newNum == 10)
                    $('#btnAdd').attr('disabled','disabled');
                  $('input[name="lines"]').val(newNum);               
            });
 
            $('#btnDel').click(function() {
                var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
                $('#input' + num).remove();     // remove the last element
 
                // enable the "add" button
                $('#btnAdd').prop('disabled',false);
 
                // if only one element remains, disable the "remove" button
                if (num-1 == 1)
                    $('#btnDel').attr('disabled','disabled');
                 $('input[name="lines"]').val(num-1);              
            });
 
            $('#btnDel').attr('disabled','disabled');
        });
        </script>

        <script type="text/javascript">          

          function calcul(cal){
            var abc = $(cal).attr('name');
            var newNum= abc.substr(abc.length-1, abc.length);
            var unitats= $("input[name='units"+newNum+"']").val()
            var preu = $("input[name='unit_price"+newNum+"']").val()
            $("input[name='total_line"+newNum+"']").val(unitats*preu)

            var abc2 = $(cal).attr('name');
            var newNum2= abc2.substr(abc2.length-1, abc2.length);
            var taxa= $("input[name='taxa"+newNum2+"']").val()
            var senseiva = $("input[name='total_line"+newNum2+"']").val()
            var calciva = (taxa/100)*senseiva;
            console.log(calciva);
            console.log(senseiva);
            $("input[name='price_cost"+newNum2+"']").val(parseInt(senseiva) + parseInt(calciva))



          }

        </script>



@endsection
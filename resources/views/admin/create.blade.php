@extends('layout.admin')
@section('main')
//FOOD
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
        <form action="{{ route('food.store') }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" />
            {{$errors->first('name')}}
          </div>
          <div class="form-group">
            <label for="usr">Categorie:</label>
            <select name="categorie" id="">
              <option>Burgers</option>
              <option>Toasts</option>
              <option>Pizzas</option>
              <option>Salads</option>
              <option>Drinks</option>
              <option>Desserts</option>
            </select>
            {{$errors->first('categorie')}}
          </div>
          <div class="form-group">
            <label for="usr">Ingredients:</label>
            <input type="text" class="form-control" id="usr" name="ingredients" />
            {{$errors->first('ingredients')}}
          </div>
          <div class="form-group">
            <label for="usr">Prix Big:</label>
            <input type="text" class="form-control" id="usr" name="big_price" />
            {{$errors->first('big_price')}}
          </div>
          <div class="form-group">
            <label for="usr">Energy Value (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_energy_value"  />
            {{$errors->first('big_energy_value')}}
          </div>
          <div class="form-group">
            <label for="usr">Proteins (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_proteins" />
            {{$errors->first('big_proteins')}}
          </div>
          <div class="form-group">
            <label for="usr">Carbohidrates (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_carbohidrats" />
            {{$errors->first('big_carbohidrats')}}
          </div>
          <div class="form-group">
            <label for="usr">Prix Small:</label>
            <input type="text" class="form-control" id="usr" name="mini_price" />
            {{$errors->first('mini_price')}}
          </div>
          <div class="form-group">
            <label for="usr">Energy Value (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_energy_value" />
            {{$errors->first('mini_energy_value')}}
          </div>
          <div class="form-group">
            <label for="usr">Proteins (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_proteins" />
            {{$errors->first('mini_proteins')}}
          </div>
          <div class="form-group">
            <label for="usr">Carbohidrates (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_carbohidrats" />
            {{$errors->first('mini_carbohidrats')}}
          </div>
          <div class="form-group">
            <label for="usr">Ticket:</label>
            <input type="text" class="form-control" id="usr" name="ticket" />
            {{$errors->first('ticket')}}
          </div>

          <div class="form-group">
            <label for="comment">Short Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description_short"></textarea>
            {{$errors->first('description_short')}}
          </div>
          
          <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            {{$errors->first('description')}}
          </div>

          <div>
            <label for="comment">Picture:</label> <br>
            <input type="file" name="picture"/>
            {{$errors->first('picture')}}
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Save</button>
          <br />
          <br />
        </form>
</div>
@endif
//ENT
@if(Auth::guard('admin')->user()->type == 'ent')
<div id="layoutSidenav_content">
        <form action="{{ route('ent.store') }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" />
            {{$errors->first('name')}}
          </div>
          <div class="form-group">
            <label for="usr">Categorie:</label>
            <select name="categorie" id="">
              <option>movie</option>
              <option>event</option>
            </select>
            {{$errors->first('categorie')}}
          </div>

          <div class="form-group">
            <label for="usr">Prix:</label>
            <input type="text" class="form-control" id="usr" name="price" />
            {{$errors->first('price')}}
          </div>

          <div class="form-group">
            <label for="usr">Start time :</label>
            <input type="text" class="form-control" id="usr" name="star" placeholder="00:00 am | 00:00 pm"/>
            {{$errors->first('star')}}
          </div>

          <div class="form-group">
            <label for="usr">End time:</label>
            <input type="text" class="form-control" id="usr" name="end" placeholder="00:00 am | 00:00 pm"/>
            {{$errors->first('end')}}
          </div>

          <div class="form-group">
            <label for="usr">Nombre de place:</label>
            <input type="text" class="form-control" id="usr" name="number" />
            {{$errors->first('number')}}
          </div>

          <div class="form-group">
            <label for="usr">Date:</label>
            <input type="text" class="form-control" id="usr" name="date" placeholder="AAAA-MM-JJ" />
            {{$errors->first('date')}}
          </div>

          <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            {{$errors->first('description')}}
          </div>

          <div>
            <label for="comment">Picture:</label> <br>
            <input type="file" name="picture"/>
            {{$errors->first('picture')}}
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Save</button>
          <br />
          <br />
        </form>
</div>
@endif
@if(Auth::guard('admin')->user()->type == 'shopping')
<div id="layoutSidenav_content">
        <form action="{{ route('shopping.store') }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" />
            {{$errors->first('name')}}
          </div>
          <div class="form-group">
            <label for="usr">Sexe:</label>
            <select name="sexe" id="">
              <option>women</option>
              <option>men</option>
              <option>kids</option>
            </select>
            {{$errors->first('categorie')}}
          </div>
          
          <div class="form-group">
            <label for="usr">Categorie:</label>
            <select name="categorie" id="">
              <option>Accessories</option>
              <option>Bag</option>
              <option>Cloths</option>
              <option>Bed</option>
              <option>Swimming</option>
              <option>Sport</option>
            </select>
            {{$errors->first('categorie')}}
          </div>



          <div class="form-group">
            <label for="usr">Taille :</label><br>
            <label for="Small">Small</label>
            <input type="checkbox" name="Small" id="Small">
            &nbsp;
            <label for="Medium">Medium</label>
            <input type="checkbox" name="Medium" id="Medium">
            &nbsp;
            <label for="Large">Large</label>
            <input type="checkbox" name="Large" id="Large">
          </div>
          
          <div class="form-group">
            <label for="usr">Couleur :</label><br>

            <label for="Black">Black</label>
            <input type="checkbox" name="Black" id="Black">
            &nbsp;
            <label for="White">White</label>
            <input type="checkbox" name="White" id="White">
            &nbsp;
            <label for="Red">Red</label>
            <input type="checkbox" name="Red" id="Red">
            &nbsp;
            <label for="Blue">Blue</label>
            <input type="checkbox" name="Blue" id="Blue">
            &nbsp;
            <label for="Orange">Orange</label>
            <input type="checkbox" name="Orange" id="Orange">
          </div>

          <div class="form-group">
            <label for="usr">Prix:</label>
            <input type="text" class="form-control" id="usr" name="price" />
            {{$errors->first('price')}}
          </div>

          <div class="form-group">
            <label for="usr">Quantite :</label>
            <input type="text" class="form-control" id="usr" name="quantite" />
            {{$errors->first('quantite')}}
          </div>

          <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            {{$errors->first('description')}}
          </div>

          <div>
            <label for="comment">Picture 1:</label> <br>
            <input type="file" name="pic1"/>
            {{$errors->first('pic1')}}
          </div>
          <br />
          <div>
            <label for="comment">Picture 2:</label> <br>
            <input type="file" name="pic2"/>
            {{$errors->first('pic2')}}
          </div>
          <br />
          <div>
            <label for="comment">Picture 3:</label> <br>
            <input type="file" name="pic3"/>
            {{$errors->first('pic3')}}
          </div>
          <br />
          <div>
            <label for="comment">Picture 4:</label> <br>
            <input type="file" name="pic4"/>
            {{$errors->first('pic4')}}
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Save</button>
          <br />
          <br />
        </form>
</div>
@endif

@endsection('main')
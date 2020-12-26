@extends('layout.admin')
@section('main')
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
        <form action="{{ route('food.update',$big->id) }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" value="{{$big->name}}" />
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
            <input type="text" class="form-control" id="usr" name="ingredients" value="{{$big->ingredients}}" />
            {{$errors->first('ingredients')}}
          </div>
          <div class="form-group">
            <label for="usr">Prix Big:</label>
            <input type="text" class="form-control" id="usr" name="big_price" value="{{$big->price}}" />
            {{$errors->first('big_price')}}
          </div>
          <div class="form-group">
            <label for="usr">Energy Value (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_energy_value" value="{{$big->energy_value}}" />
            {{$errors->first('big_energy_value')}}
          </div>
          <div class="form-group">
            <label for="usr">Proteins (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_proteins" value="{{$big->proteins}}" />
            {{$errors->first('big_proteins')}}
          </div>
          <div class="form-group">
            <label for="usr">Carbohidrates (Big):</label>
            <input type="text" class="form-control" id="usr" name="big_carbohidrats" value="{{$big->carbohidrats}}" />
            {{$errors->first('big_carbohidrats')}}
          </div>
          <div class="form-group">
            <label for="usr">Prix Small:</label>
            <input type="text" class="form-control" id="usr" name="mini_price" value="{{$mini->price}}" />
            {{$errors->first('mini_price')}}
          </div>
          <div class="form-group">
            <label for="usr">Energy Value (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_energy_value" value="{{$mini->energy_value}}" />
            {{$errors->first('mini_energy_value')}}
          </div>
          <div class="form-group">
            <label for="usr">Proteins (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_proteins" value="{{$mini->proteins}}" />
            {{$errors->first('mini_proteins')}}
          </div>
          <div class="form-group">
            <label for="usr">Carbohidrates (Small):</label>
            <input type="text" class="form-control" id="usr" name="mini_carbohidrats" value="{{$mini->carbohidrats}}" />
            {{$errors->first('mini_carbohidrats')}}
          </div>
          <div class="form-group">
            <label for="usr">Ticket:</label>
            <input type="text" class="form-control" id="usr" name="ticket" value="{{$big->ticket}}" />
            {{$errors->first('ticket')}}
          </div>

          <div class="form-group">
            <label for="comment">Short Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description_short">{{$big->description_short}}</textarea>
            {{$errors->first('description_short')}}
          </div>
              
          <div class="form-group">
            <label for="comment">Description:</label> 
            <textarea class="form-control" rows="5" id="comment" name="description">{{$big->description}}</textarea>
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
        <form action="{{ route('ent.update',$ent->id) }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" value="{{$ent->name}}"/>
            {{$errors->first('name')}}
          </div>
          <div class="form-group">
            <label for="usr">Categorie:</label>
          @if($ent->categorie != 'activity')
            <select name="categorie" id="">
              <option>movie</option>
              <option>event</option>
            </select>
            {{$errors->first('categorie')}}
          @else
            <input type="text" class="form-control" id="usr" name="categorie" value="activity" readonly>
          @endif
          </div>

          <div class="form-group">
            <label for="usr">Prix:</label>
            <input type="text" class="form-control" id="usr" name="price" value="{{$ent->price}}"/>
            {{$errors->first('price')}}
          </div>

          <div class="form-group">
            <label for="usr">Start time :</label>
            <input type="text" class="form-control" id="usr" name="star" placeholder="00:00 am | 00:00 pm" value="{{$ent->star}}"/>
            {{$errors->first('star')}}
          </div>

          <div class="form-group">
            <label for="usr">End time:</label>
            <input type="text" class="form-control" id="usr" name="end" placeholder="00:00 am | 00:00 pm" value="{{$ent->end}}"/>
            {{$errors->first('end')}}
          </div>

          <div class="form-group">
            <label for="usr">Nombre de place:</label>
            <input type="text" class="form-control" id="usr" name="number" value="{{$ent->places}}"/>
            {{$errors->first('number')}}
          </div>

          <div class="form-group">
            <label for="usr">Date:</label>
            <input type="text" class="form-control" id="usr" name="date" placeholder="AAAA-MM-JJ" value="{{$ent->date}}"/>
            {{$errors->first('date')}}
          </div>

          <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description">{{$ent->description}}</textarea>
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
        <form action="{{ route('shopping.update',$shop->id) }}" class="SuperAdminTable_admin ADD_shop" id="EditEC" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="usr">Nom:</label>
            <input type="text" class="form-control" id="usr" name="name" value="{{$shop->name}}" />
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
            <label for="usr">Taille :</label>
            <select name="taille" id="">
              <option value="Small">Small</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
            </select>
            {{$errors->first('taille')}}
          </div>
          
          <div class="form-group">
            <label for="usr">Couleur :</label>
            <select name="couleur" id="">
              <option value="Black">Black</option>
              <option value="White">White</option>
              <option value="Red">Red</option>
              <option value="Blue">Blue</option>
              <option value="Orange">Orange</option>
            </select>
            {{$errors->first('couleur')}}
          </div>

          <div class="form-group">
            <label for="usr">Prix:</label>
            <input type="text" class="form-control" id="usr" name="price" value="{{$shop->price}}"/>
            {{$errors->first('price')}}
          </div>

          <div class="form-group">
            <label for="usr">Quantite :</label>
            <input type="text" class="form-control" id="usr" name="quantite" value="{{$shop->quantite}}"/>
            {{$errors->first('quantite')}}
          </div>

          <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="comment" name="description">{{$shop->description}}</textarea>
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
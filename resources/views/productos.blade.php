<SCRIPT languaje="JavaScript">
function pulsar() {
alert("El producto seleccionado se ha añadido a tu carrito de compras");
}
</SCRIPT>

<main id="productos" class="container" style="background-color: #E16060">

    {{-- <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </section> --}}

    <h2 style="text-align: center">PRODUCTOS</h2>

    <div class="album py-5 bg-light" style="background-color: #E16060">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="img/10.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                <h3>Tookang</h3>
                Tookang Mujer Camisa De Entrenamiento Sudaderas con Capucha De Manga Larga</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input font size="16px" type="text" class="form-control" id="cantidad0" name="cantidad0" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$15.00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/11.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                <h3>Urban GoCo</h3>
                Urban GoCo Falda Mujer Elástica Plisada Básica Patinador Multifuncional Corto Falda</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input type="text" class="form-control" id="cantidad1" name="cantidad1" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$20.00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/12.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                <h3>Logobeing</h3>
                Logobeing Zapatos Mujer Botines Mujer Tacon Medio Botas de Cordones Seguridad Zapatillas-Botas </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input type="text" class="form-control" id="cantidad2" name="cantidad2" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$36.50</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm"  width="300" height="200">
                <img class="card-img-top" src="img/13.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                  <h3>Minetom</h3>
                  Minetom Mujer Moda Otoño Invierno Dedo Puntiagudo Estiletes Lace-Up Tobillo Botas Zapatos De Tacon</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input type="text" class="form-control" id="cantidad3" name="cantidad3" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$35.00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" width="300" height=
            "200">
                <img class="card-img-top" src="img/15.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                <h3>oodji</h3>
                oodji Ultra Mujer Chaqueta de Lino Entallada
                <br>
                <br>
                <br>
                <br>
              </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input type="text" class="form-control" id="cantidad4" name="cantidad4" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$25.00</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/16.jpg" alt="Card image cap" width="300" height="200">
              {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
              <div class="card-body">
                <p class="card-text">
                <h3>Minetom</h3>
                Minetom Mujeres Dos Piezas Traje De Negocios Formal Blazer Y Pantalones Conjunto Manga Larga</p>
                <br>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="pulsar()">Comprar</button>
                    <input type="text" class="form-control" id="cantidad5" name="cantidad5" placeholder="Cantidad ">
                  </div>
                  <small class="text-muted">$75.00</small>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </main>
<x-layout>

  <!-- SECTION: Container generale con sfondo e centratura verticale -->
  <div class="container-fluid register-bg d-flex align-items-center justify-content-center min-vh-100">

    <!-- SECTION: Riga centrale contenente il form -->
    <div class="row justify-content-center text-center w-100">

      <!-- SECTION: Colonna responsive che contiene titolo, form e logo -->
      <div class="col-12 col-md-8 col-lg-6 position-relative">

  
        <!-- SECTION: Titolo della pagina -->
        <h1 class="mb-4 text-uppercase fw-bold custom-subtitle text-black">
          Registrati
        </h1>

        <!-- SECTION: Form di registrazione -->
        <form
          action="{{ route('register') }}"    
          method="POST"                       
          class="bg-white text-dark p-4 p-md-5 rounded-4 shadow-lg mx-auto"  
          novalidate                        
        >
          @csrf  <!-- Protezione CSRF di Laravel -->

          <!-- INPUT: Email -->
          <div class="mb-4 text-start">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="Inserisci la tua email"
              required
            >
          </div>

          <!-- INPUT: Nome -->
          <div class="mb-4 text-start">
            <label for="name" class="form-label fw-semibold">Nome utente</label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control"
              placeholder="Inserisci il tuo nome"
              required
            >
          </div>

          <!-- INPUT: Password -->
          <div class="mb-4 text-start">
            <label for="password" class="form-label fw-semibold">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              placeholder="Crea una password"
              required
              minlength="8"
            >
          </div>

          <!-- INPUT: Conferma Password -->
          <div class="mb-5 text-start">
            <label for="password_confirmation" class="form-label fw-semibold">Conferma Password</label>
            <input
              type="password"
              name="password_confirmation"
              id="password_confirmation"
              class="form-control"
              placeholder="Conferma la password"
              required
              minlength="8"
            >
          </div>

          <!-- SECTION: Bottone di invio -->
          <div class="d-grid">
            <button type="submit" class="btn btn-lg fw-semibold shadow btn-black-text">
              Registrati
            </button>
          </div>

        </form>
        <!-- END FORM -->

      </div> 
    </div> 
  </div> 

</x-layout>
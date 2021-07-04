<?php $this->load->view('cabecalho'); ?>
<?php $this->load->view('menu-inicio-sobre'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Emerson Braga</h1>
      <p>Sou <span class="typed" data-typed-items="Estudante, Desenvolvedor Web"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Sobre mim</h2>
          <p>Olá!</p><br>

          <p style="text-align: justify;">Me chamo Emerson, tenho 19 anos, sou natural da cidade de Caraúbas, no interior do estado do Rio Grande do Norte. 
          Atualmente sou estudante do curso técnico de nível médio integrado em informática no Instituto Federal de Educação,
          Ciência e Tecnologia do Rio Grande do Norte, Campus Apodi (IFRN/AP). Desenvolvo pesquisa na área de tecnologia da 
          informação (TI), com ênfase em programação. Sou membro da equipe de robótica Odyssey.</p><br>

          <p style="text-align: justify;">Tenho o objetivo de atuar buscando sempre ser um colaborador proativo, contribuindo com o meu crescimento pessoal e do ambiente onde estou presente, desenvolvendo as atividades profissionais sempre com responsabilidade.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php echo base_url('assets/img/a.jpg') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            <div class="contact">
              <div class="container">
                <div class="col">
                  <div class="info">
                    <div class="address">
                      <i class="icofont-google-map"></i>
                      <h4>Endereço:</h4>
                      <p>***********************,<br>***************, Caraúbas-RN</p>
                    </div>

                    <div class="email">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>emersonviniciusbraga@outlook.com<br>emersonviniciusbraga@gmail.com</p>
                    </div>

                    <div class="phone">
                      <i class="icofont-phone"></i>
                      <h4>Celular:</h4>
                      <p>+55 84 9 9667-8893</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

<?php $this->load->view('rodape'); ?>
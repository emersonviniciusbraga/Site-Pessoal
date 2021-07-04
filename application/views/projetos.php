<?php $this->load->view('cabecalho'); ?>
<?php $this->load->view('menu'); ?>
  <main id="main">


    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Projetos</h2>
          <p>Alguns projetos que desenvolvi ou estou desenvolvendo.</p>
        </div>

        <div class="row">

          <!-- DMA -->
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">DMA</h3>
              <div class="resume-item pb-0">
                <h4>Dispositivo de Monitoramento para Aviários</h4>
                <h5>2019 - atualmente</h5>
                <p style="text-align: justify;"><em>Considerando as dificuldades existentes no monitoramento em criatórios reservados a avicultura, no que diz respeito a Amônia, este trabalho procura criar um sistema automatizado, utilizando uma página web associada a um microcontrolador ESP32, que agirá juntamente com um sensor de gás, e um de temperatura e umidade.</em></p>
                <p>Participação como Desenvolvedor Web</p>
                
              </div>
          </div>

          <!-- DeGust -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">DeGust</h3>
              <div class="resume-item pb-0">
                <h4>Sistema de Pesquisas de Degustações no IFRN</h4>
                <h5>2020 - atualmente</h5>
                <p style="text-align: justify;"><em>No nosso campus, ocorrem muitas das vezes pesquisas que precisam de engajamento do público. Degustações são um exemplo disso.O projeto visa automatizar a coleta de dados. Isso ocorreria por meio de um sistema especializado para atender as necessidades dos pesquisadoras por meio de questionários.</em></p><br>
                <p>Participação como Desenvolvedor Web</p>
                
              </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

<?php $this->load->view('rodape'); ?>
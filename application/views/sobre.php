<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    
    <title>Zamix | Sobre</title>
</head>

<body>
    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->   
     
   <?php foreach($about as $value) : ?>
    <section class="sc-about-us" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-white">
                    <?php echo $value->title; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="m-text-align-left ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php echo $value->description; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
</body>

</html>
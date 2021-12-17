<?php 
session_start();
include('conexao.php');
$consulta = "select * from computadores";
$consultaa = "select * from monitores";
$consultaaa = "select * from perifericos";
$con = $conexao->query($consulta) or die($mysqli->error);
$conn = $conexao->query($consultaa) or die($mysqli->error);
$connn = $conexao->query($consultaaa) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/mainStyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGE</title>
	  <link rel="icon" type="imagem/png" href="img/LOGO-SIGE.ico" />
  </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <div class="logo">
        <img src="img/LOGO-SIGE.png">
      </div>
      <span class="logo_name">SIGE</span>
    </div>
    <ul class="nav-links">
      <li data-target="#dispositivos">
      <a href="#">
      <i class='bx bx-card'></i>
          <span class="link_name">Computadores</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Computadores</a></li>
        </ul>
      </li>
      <li data-target="#monitores">
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-desktop'></i>
            <span class="link_name">Monitores</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Monitores</a></li>
        </ul>
      </li>
      <li data-target="#perifericos">
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-keyboard'></i>
            <span class="link_name">Periféricos</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Periféricos</a></li>
        </ul>
      </li>
      <li data-target="#cadastrar">
        <a href="#">
          <i class='bx bx-edit'></i>
          <span class="link_name">Cadastrar</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Cadastrar</a></li>
        </ul>
      </li>
      <li data-target="#pesquisa">
        <a href="#">
          <i class='bx bx-search-alt'></i>
          <span class="link_name">Pesquisa</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Pesquisa</a></li>
        </ul>
      </li>
      <li data-target="#relatorio">
        <a href="#">
          <i class='bx bxs-file' ></i>
          <span class="link_name">Relatório</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Relatório</a></li>
        </ul>
      </li>
    <div class="profile-details">
      <div class="name-job">
        <div class="profile_name">SIGE - Sistema de <br> Gerenciamento <br> de Equipamentos</div>
        <div class="job"></div>
      </div>
      <a href="logout.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section data-content id="dispositivos" class="home-section section__active">
    <div class="home-content">
      <i class='bx bx-menu menu1' ></i>
      <span class="text">Computadores</span>
    </div>
    <div class="conteudo">
    <?php while($dado = $con->fetch_array()){ ?>
      <div class="box">
      <i class='bx bx-card'></i>
        <ul>
          <li>ID/Nome: <?php echo $dado["id_computador"];?>/<?php echo $dado["nome_computador"]  ?></li>
          <li>CPU: <?php echo $dado["cpu_computador"] ?></li>
          <li>GPU: <?php echo $dado["gpu_computador"] ?></li>
          <li>RAM: <?php echo $dado["ram_computador"] ?></li>
          <li>HD: <?php echo $dado["hd_computador"] ?></li>
          <li>OS: <?php echo $dado["os_computador"] ?></li>
        </ul>
      </div>
      <?php } ?>
    </div>
  </section>
  <section data-content id="cadastrar" class="home-section">
    <div class="home-content">
      <i class='bx bx-menu menu2' ></i>
      <span class="text">Cadastrar</span>
    </div>
    <div class="conteudo">
      <form class="form" action="cadastrar_computador.php" method="POST">
        <p>Cadastro de Computadores</p>
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="cpu" placeholder="cpu">
        <input type="text" name="gpu" placeholder="gpu">
        <input type="text" name="ram" placeholder="ram">
        <input type="text" name="hd" placeholder="hd">
        <input type="text" name="os" placeholder="os">
        <input type="submit" class="btn" value="cadastro">
      </form>
      <form class="form" action="cadastrar_monitor.php" method="POST">
        <p>Cadastro de Monitores</p>
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="resolucao" placeholder="resolução">
        <input type="text" name="frequencia" placeholder="frequência">
        <input type="text" name="tempo" placeholder="tempo de resposta">
        <input type="text" name="computador" placeholder="Computador associado">
        <input type="submit" class="btn" value="cadastro">
      </form>
      <form class="form" action="cadastrar_perifericos.php" method="POST">
        <p>Cadastro de Periféricos</p>
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="tipo" placeholder="tipo">
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="computador" placeholder="Computador associado">
        <input type="submit" class="btn" value="cadastro">
      </form>
    </div>
  </section>
  <section data-content id="monitores" class="home-section">
    <div class="home-content">
      <i class='bx bx-menu menu3' ></i>
      <span class="text">Monitores</span>
    </div>
    <div class="conteudo">
    <?php while($dadoo = $conn->fetch_array()){ ?>
      <div class="box">
      <i class='bx bx-desktop'></i>
        <ul>
          <li>ID/Nome: <?php echo $dadoo["id_monitor"];?>/<?php echo $dadoo["nome_monitor"]  ?></li>
          <li>Marca: <?php echo $dadoo["marca_monitor"] ?></li>
          <li>Resolução: <?php echo $dadoo["resolucao_monitor"] ?></li>
          <li>Frequência: <?php echo $dadoo["frequencia_monitor"] ?></li>
          <li>Tempo de resposta: <?php echo $dadoo["tempo_monitor"] ?></li>
          <li>Computador: <?php echo $dadoo["computador_monitor"] ?></li>
        </ul>
      </div>
      <?php } ?>
    </div>
  </section>
  <section data-content id="perifericos" class="home-section">
    <div class="home-content">
      <i class='bx bx-menu menu4' ></i>
      <span class="text">Periféricos</span>
    </div>
    <div class="conteudo">
    <?php while($dadooo = $connn->fetch_array()){ ?>
      <div class="box">
        <?php if($dadooo["tipo_periferico"] == "mouse") {?>
          <i class='bx bx-mouse'></i>
        <?php } 
        elseif($dadooo["tipo_periferico"] == "teclado") {?>
          <i class='bx bxs-keyboard'></i>
        <?php }
        else{?>
          <i class='bx bx-question-mark' ></i>
        <?php } ?>
        <ul>
          <li>ID/Nome: <?php echo $dadooo["id_periferico"];?>/<?php echo $dadooo["nome_periferico"]  ?></li>
          <li>Tipo: <?php echo $dadooo["tipo_periferico"] ?></li>
          <li>Marca: <?php echo $dadooo["marca_periferico"] ?></li>
          <li>Computador: <?php echo $dadooo["computador_periferico"] ?></li>
        </ul>
      </div>
      <?php } ?>
    </div>
  </section>
  <section data-content id="pesquisa" class="home-section">
    <div class="home-content">
      <i class='bx bx-menu menu5' ></i>
      <span class="text">Pesquisa</span>
    </div>
  </section>
  <section data-content id="relatorio" class="home-section">
    <div class="home-content">
      <i class='bx bx-menu menu6' ></i>
      <span class="text">Relatório</span>
    </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn1 = document.querySelector(".menu1");
  let sidebarBtn2 = document.querySelector(".menu2");
  let sidebarBtn3 = document.querySelector(".menu3");
  let sidebarBtn4 = document.querySelector(".menu4");
  let sidebarBtn5 = document.querySelector(".menu5");
  let sidebarBtn6 = document.querySelector(".menu6");
  sidebarBtn1.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  sidebarBtn2.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  sidebarBtn3.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  sidebarBtn4.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  sidebarBtn5.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  sidebarBtn6.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  const tabs = document.querySelectorAll('[data-target]')
  tabContents = document.querySelectorAll('[data-content]')
  tabs.forEach(tab => {
      tab.addEventListener('click', () => {
          const target = document.querySelector(tab.dataset.target)

          tabContents.forEach(tabContent => {
            tabContent.classList.remove('section__active')
          })
          target.classList.add('section__active')
        })
  })
  </script>
</body>
</html>

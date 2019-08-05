<?php

  class Connexion{

    private $server = "mysql:hoste=localhost;dbname=qcm";

    private $user = "lilian";

    private $password = "21septembre";

    private $security = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    protected $connex;

    /* Fonction de co à la bdd en pdo */
    public function openConnexion()

    {
        try
        {

            $this->connex = new PDO($this->server, $this->user, $this->password, $this->security);

            return $this->connex;
        }
        catch (PDOException $e)
        {

            echo "Il y a eu une erreur lors de la connexion: " . $e->getMessage();
        }
    }

    /* Function for closing connection */
    public function closeConnexion()
    {
        $this->connex = null;
    }
  }

 ?>

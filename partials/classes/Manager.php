<?php

class Manager
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // CRUD
    /**
     * $kwargs = ['message', 'author', 'id_tour_operator'];
     */
    public function createReview(array $kwargs)
    {
        $q = $this->db
            ->prepare("INSERT INTO reviews(message, author, id_tour_operator)
                    VALUES(?, ?, ?)");
        $q->execute([
            $kwargs['message'] | "Le client n'a pas laissé de commentaire.",
            $kwargs['author'],
            $kwargs['id_tour_operator']
        ]);
    }

    public function updateOperatorToPremium(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("UPDATE tour_operators SET tour_operators.is_premium = 1
                    WHERE tour_operators.id = ?");
        $q->execute([
            $idTourOperator
        ]);
    }

    /**
     * $kwargs = ['name', 'grade', 'link', 'is_premium'];
     */
    public function createTourOperator(array $kwargs)
    {
        $q = $this->db
            ->prepare("INSERT INTO tour_operators(name, grade, link, is_premium)
                    VALUES(?, ?, ?, ?)");
        $q->execute([
            $kwargs['name'],
            $kwargs['grade'] | 0,
            $kwargs['link'],
            $kwargs['is_premium'] | 0
        ]);
    }

    /**
     * $kwargs = ['location', 'price', 'id_tour_operator'];
     */
    public function createDestination(array $kwargs)
    {
        $q = $this->db
            ->prepare("INSERT INTO destinations(location, price, id_tour_operator)
                    VALUES(?, ?, ?)");
        $q->execute([
            $kwargs['location'],
            $kwargs['price'],
            $kwargs['id_tour_operator']
        ]);
    }




    public function getAllDestinations()
    {
        $q = $this->db->prepare("SELECT destinations.* FROM destinations");
        $q->execute();

        return $q->fetchAll();
    }

    public function getOperatorByDestination(string $location)
    {
        $q = $this->db
            ->prepare("SELECT tour_operators.*
                        FROM tour_operators
                        INNER JOIN destinations
                        ON tour_operators.id = destinations.id_tour_operator
                        WHERE destinations.location = ?");
        $q->execute([
            $location
        ]);

        return $q->fetchAll();
    }

    public function getReviewsByOperatorId(int $idTourOperator)
    {
        $q = $this->db
            ->prepare("SELECT reviews.*
                       FROM reviews
                       WHERE reviews.id_tour_operator = ?");
        $q->execute([
            $idTourOperator
        ]);

        return $q->fetchAll();
    }

    public function getAllOperators()
    {
        $q = $this->db->prepare("SELECT tour_operators.* FROM tour_operators");
        $q->execute();

        return $q->fetchAll();
    }
}

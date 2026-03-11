<?php
# FUNCTIONS FOR COMMISSIONS

//get ALL commissions
    function getCommissions($pdo) {
        $stmt = $pdo->query("SELECT * FROM commissions ORDER BY id DESC");
        return $stmt->fetchAll();
    }

// get SINGLE commissions
    function getCommission($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM commissions WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


//update commission status
    function updateCommissionStatus($pdo, $id, $status){
        $stmt = $pdo->prepare("UPDATE commissions SET status = ? WHERE id = ?");
        $stmt->execute([$status, $id]);
    }


//delete commission
    function deletecommission($pdo, $id){
        $stmt = $pdo->prepare("DELETE FROM commissions WHERE id = ?");
        $stmt->execute([$id]);
    }


# FUNCTIONS FOR ARTWORKS

//get ALL artworks
    function getArtworks($pdo){
        $stmt = $pdo->query("SELECT * FROM artwokrs ORDER BY id DESC");
        return $stmt->fetchAll();
    }

//delete an artwork
    function deleteArtwork($pdo, $id){
        $stmt = $pdo->prepare("DELETE FROM arwotks WHERE id = ?");
        $stmt->execute([$id]);
    }

//add an artwork
    function addArtwork($pdo, $title, $excerpt, $description, $image_url, $category){
        $stmt = $pdo->prepare("INSERT INTO artworks (title, excerpt, description, image_url, category) VALUES(?, ?, ?, ?, ?)");
        $stmt->execute([
            $title,
            $excerpt,
            $description,
            $image_url,
            $category
        ]);
    }

//update artwork details
    function updateArtwork($pdo, $id, $title, $excerpt, $description, $image_url, $category){
        $stmt = $pdo->prepare("UPDATE artworks SET title = ?, excerpt = ?, description = ?, image_url = ?, category = ? WHERE id = ?");
        $stmt->execute([
            $title,
            $excerpt,
            $description,
            $image_url,
            $category,
            $id
        ]);
    }
?>

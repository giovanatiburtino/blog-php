<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){ // checar se há um id
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error culpa non unde sit sunt maiores quo, beatae, odit, quod dolorem qui asperiores dolor distinctio mollitia consectetur labore eos ipsam fugit.
            Animi ipsam in sed fugit atque odit id cupiditate! Vero obcaecati est incidunt reprehenderit consectetur praesentium totam fugit cumque sequi hic? Quisquam ad quis voluptate dolor, exercitationem ullam et obcaecati.
            Enim animi doloremque ut inventore, quas iste eum consectetur veniam doloribus fugit soluta maiores obcaecati porro laboriosam tempore nam odit a assumenda tenetur perspiciatis architecto pariatur earum quae est! Facere.
            Illo error iste eius nulla repudiandae temporibus accusamus qui quod eos, at earum culpa quos ea possimus praesentium labore aperiam corrupti ipsam corporis ut veniam voluptatem ullam quia? Molestiae, iusto.
            Ducimus cupiditate beatae doloribus vitae est, reiciendis natus molestiae suscipit quod corporis dignissimos quisquam, itaque similique assumenda eius magnam quos? Fugiat facilis necessitatibus fugit! Adipisci minus aliquam quos eveniet ab.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error culpa non unde sit sunt maiores quo, beatae, odit, quod dolorem qui asperiores dolor distinctio mollitia consectetur labore eos ipsam fugit.
            Animi ipsam in sed fugit atque odit id cupiditate! Vero obcaecati est incidunt reprehenderit consectetur praesentium totam fugit cumque sequi hic? Quisquam ad quis voluptate dolor, exercitationem ullam et obcaecati.
            Enim animi doloremque ut inventore, quas iste eum consectetur veniam doloribus fugit soluta maiores obcaecati porro laboriosam tempore nam odit a assumenda tenetur perspiciatis architecto pariatur earum quae est! Facere.
            Illo error iste eius nulla repudiandae temporibus accusamus qui quod eos, at earum culpa quos ea possimus praesentium labore aperiam corrupti ipsam corporis ut veniam voluptatem ullam quia? Molestiae, iusto.
            Ducimus cupiditate beatae doloribus vitae est, reiciendis natus molestiae suscipit quod corporis dignissimos quisquam, itaque similique assumenda eius magnam quos? Fugiat facilis necessitatibus fugit! Adipisci minus aliquam quos eveniet ab.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
    <h1><?= $currentPost['title'] ?></h1>
<?php
    include_once("templates/footer.php");
?>
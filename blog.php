<?php include 'header.php'; ?>

<?php
// ======================
// DATABASE CONNECTION
// ======================
$host = "localhost";
$dbname = "ugbc_db";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database error: " . $e->getMessage());
}

// ======================
// FETCH BLOG POSTS
// ======================
$stmt = $pdo->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Determine if viewing a single post
$single_post = null;
if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
  $stmt->execute([$id]);
  $single_post = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
                 <meta charset="UTF-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>UGBC Ayat Church | Blog</title>

                 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
                                  rel="stylesheet">
                 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
                                  rel="stylesheet">

                 <style>
                 body {
                                  font-family: 'Poppins', sans-serif;
                                  background-color: #f7f9fc;
                                  margin: 0;
                                  color: #333;
                 }

                 header h1 {
                                  text-align: center;
                                  margin-top: 40px;
                                  color: #004aad;
                 }

                 .container {
                                  width: 90%;
                                  max-width: 1200px;
                                  margin: 40px auto;
                                  display: flex;
                                  flex-wrap: wrap;
                                  gap: 30px;
                 }

                 .post-card {
                                  flex: 1 1 45%;
                                  background: #fff;
                                  border-radius: 15px;
                                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                  overflow: hidden;
                                  transition: transform 0.3s ease;
                 }

                 .post-card:hover {
                                  transform: scale(1.02);
                 }

                 .post-card img {
                                  width: 100%;
                                  height: 220px;
                                  object-fit: cover;
                 }

                 .post-content {
                                  padding: 20px;
                 }

                 .post-content h2 {
                                  color: #004aad;
                                  font-size: 1.4rem;
                                  margin-bottom: 10px;
                 }

                 .post-content p {
                                  color: #555;
                                  line-height: 1.6;
                 }

                 .read-more {
                                  display: inline-block;
                                  margin-top: 10px;
                                  background: #004aad;
                                  color: white;
                                  padding: 8px 16px;
                                  border-radius: 8px;
                                  text-decoration: none;
                 }

                 .read-more:hover {
                                  background: #2c74b3;
                 }

                 /* Single Post View */
                 .single-post {
                                  width: 90%;
                                  max-width: 800px;
                                  background: #fff;
                                  margin: 40px auto;
                                  border-radius: 15px;
                                  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                  padding: 30px;
                 }

                 .single-post img {
                                  width: 100%;
                                  border-radius: 15px;
                                  margin-bottom: 20px;
                 }

                 .single-post h2 {
                                  color: #004aad;
                                  margin-bottom: 10px;
                 }

                 .single-post .meta {
                                  color: #777;
                                  font-size: 0.9rem;
                                  margin-bottom: 20px;
                 }

                 .single-post video,
                 .single-post audio {
                                  width: 100%;
                                  border-radius: 10px;
                                  margin-bottom: 20px;
                 }

                 .share-buttons {
                                  margin-top: 20px;
                 }

                 .share-buttons a {
                                  display: inline-block;
                                  margin-right: 10px;
                                  padding: 8px 12px;
                                  border-radius: 8px;
                                  color: white;
                                  text-decoration: none;
                                  font-size: 0.9rem;
                 }

                 .fb {
                                  background: #3b5998;
                 }

                 .tw {
                                  background: #1da1f2;
                 }

                 .yt {
                                  background: #ff0000;
                 }

                 .fb:hover {
                                  background: #2d4373;
                 }

                 .tw:hover {
                                  background: #0d8ddb;
                 }

                 .yt:hover {
                                  background: #cc0000;
                 }

                 footer {
                                  background: #004aad;
                                  color: white;
                                  text-align: center;
                                  padding: 20px;
                                  margin-top: 50px;
                 }

                 @media(max-width: 900px) {
                                  .container {
                                                   flex-direction: column;
                                  }

                                  .post-card {
                                                   flex: 1 1 100%;
                                  }
                 }
                 </style>
</head>

<body>

                 <header>
                                  <h1>UGBC Ayat Church Blog</h1>
                                  <p style="text-align:center;">Words of inspiration, devotion, and testimony for your
                                                   spiritual journey</p>
                 </header>

                 <?php if ($single_post): ?>
                 <!-- SINGLE BLOG VIEW -->
                 <div class="single-post">
                                  <?php if ($single_post['image_url']): ?>
                                  <img src="<?php echo htmlspecialchars($single_post['image_url']); ?>"
                                                   alt="Post Image">
                                  <?php endif; ?>

                                  <h2><?php echo htmlspecialchars($single_post['title']); ?></h2>
                                  <div class="meta">
                                                   <i class="fa-solid fa-user"></i>
                                                   <?php echo htmlspecialchars($single_post['author']); ?> |
                                                   <i class="fa-solid fa-calendar"></i>
                                                   <?php echo date("F j, Y", strtotime($single_post['created_at'])); ?>
                                  </div>

                                  <?php if ($single_post['media_type'] === 'video'): ?>
                                  <video controls>
                                                   <source src="<?php echo htmlspecialchars($single_post['media_url']); ?>"
                                                                    type="video/mp4">
                                  </video>
                                  <?php elseif ($single_post['media_type'] === 'audio'): ?>
                                  <audio controls>
                                                   <source src="<?php echo htmlspecialchars($single_post['media_url']); ?>"
                                                                    type="audio/mpeg">
                                  </audio>
                                  <?php endif; ?>

                                  <p><?php echo nl2br(htmlspecialchars($single_post['content'])); ?></p>

                                  <div class="share-buttons">
                                                   <?php $pageUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
                                                   <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($pageUrl); ?>"
                                                                    target="_blank">
                                                                    <i class="fa-brands fa-facebook-f"></i> Facebook
                                                   </a>
                                                   <a class="tw" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($pageUrl); ?>&text=<?php echo urlencode($single_post['title']); ?>"
                                                                    target="_blank">
                                                                    <i class="fa-brands fa-twitter"></i> Twitter
                                                   </a>
                                                   <a class="yt" href="https://www.youtube.com/results?search_query=<?php echo urlencode($single_post['title']); ?>"
                                                                    target="_blank">
                                                                    <i class="fa-brands fa-youtube"></i> YouTube
                                                   </a>
                                  </div>
                 </div>
                 <?php else: ?>
                 <!-- BLOG LIST -->
                 <div class="container">
                                  <?php if ($posts): ?>
                                  <?php foreach ($posts as $post): ?>
                                  <div class="post-card">
                                                   <?php if ($post['image_url']): ?>
                                                   <img src="<?php echo htmlspecialchars($post['image_url']); ?>"
                                                                    alt="Post Image">
                                                   <?php endif; ?>
                                                   <div class="post-content">
                                                                    <h2><?php echo htmlspecialchars($post['title']); ?>
                                                                    </h2>
                                                                    <p><i class="fa-solid fa-user"></i>
                                                                                     <?php echo htmlspecialchars($post['author']); ?>
                                                                                     |
                                                                                     <?php echo date("F j, Y", strtotime($post['created_at'])); ?>
                                                                    </p>
                                                                    <p><?php echo substr(strip_tags($post['content']), 0, 120); ?>...
                                                                    </p>
                                                                    <a href="blog.php?id=<?php echo $post['id']; ?>"
                                                                                     class="read-more">Read More</a>
                                                   </div>
                                  </div>
                                  <?php endforeach; ?>
                                  <?php else: ?>
                                  <p style="text-align:center;">No blog posts available yet.</p>
                                  <?php endif; ?>
                 </div>
                 <?php endif; ?>

                 <footer>
                                  <p>&copy; <?php echo date("Y"); ?> UGBC Ayat Church. All Rights Reserved.</p>
                 </footer>

</body>

</html>

<?php include 'footer.php'; ?>
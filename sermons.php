<?php
// ======================
// DATABASE CONNECTION
// ======================
$host = "localhost";
$dbname = "ugbc_db"; // make sure this DB exists in phpMyAdmin
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// ======================
// FETCH SERMONS & PROGRAMS
// ======================
$sermons = $pdo->query("SELECT * FROM sermons ORDER BY program_date DESC")->fetchAll(PDO::FETCH_ASSOC);
$programs = $pdo->query("SELECT * FROM programs ORDER BY event_date ASC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);

// Selected sermon
$selected_sermon = null;
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM sermons WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $selected_sermon = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
                 <meta charset="UTF-8" />
                 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
                 <title>Sermons & Programs | UGBC Ayat Church</title>

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

                 .page-hero {
                                  background: linear-gradient(120deg, #004aad, #2c74b3);
                                  color: #fff;
                                  padding: 28px 20px;
                                  text-align: center;
                 }

                 .page-hero h1 {
                                  margin: 0;
                                  font-size: 1.8rem;
                 }

                 .page-hero p {
                                  margin: 6px 0 0;
                                  opacity: 0.9;
                 }

                 .container {
                                  display: flex;
                                  flex-wrap: wrap;
                                  gap: 30px;
                                  padding: 30px 5%;
                                  max-width: 1200px;
                                  margin: 0 auto;
                 }

                 .sermon-list,
                 .sermon-display {
                                  flex: 1 1 45%;
                                  background: white;
                                  border-radius: 12px;
                                  padding: 18px;
                                  box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
                 }

                 .sermon-list h2,
                 .sermon-display h2 {
                                  color: #004aad;
                                  margin-bottom: 12px;
                 }

                 .sermon-item {
                                  border-bottom: 1px solid #eee;
                                  padding: 12px 0;
                 }

                 .sermon-item h3 {
                                  margin: 0 0 6px 0;
                                  color: #222;
                                  font-size: 1.05rem;
                 }

                 .sermon-item .meta {
                                  color: #666;
                                  font-size: 0.9rem;
                 }

                 .sermon-item .watch-btn {
                                  display: inline-block;
                                  margin-top: 10px;
                                  background: #004aad;
                                  color: #fff;
                                  padding: 8px 14px;
                                  border-radius: 8px;
                                  text-decoration: none;
                                  font-size: 0.9rem;
                 }

                 .sermon-item .watch-btn:hover {
                                  background: #2c74b3;
                 }

                 .sermon-display video,
                 .sermon-display iframe {
                                  width: 100%;
                                  border-radius: 12px;
                                  margin-top: 10px;
                                  max-height: 480px;
                 }

                 .notes {
                                  background: #f4f7ff;
                                  padding: 14px;
                                  border-radius: 8px;
                                  margin-top: 14px;
                 }

                 .share-buttons {
                                  margin-top: 14px;
                 }

                 .share-buttons a {
                                  display: inline-block;
                                  margin-right: 8px;
                                  padding: 8px 12px;
                                  border-radius: 8px;
                                  color: white;
                                  text-decoration: none;
                                  font-size: 0.9rem;
                 }

                 .fb {
                                  background: #3b5998;
                 }

                 .yt {
                                  background: #ff0000;
                 }

                 .fb:hover {
                                  background: #2d4373;
                 }

                 .yt:hover {
                                  background: #cc0000;
                 }

                 .programs {
                                  background: #f4f7ff;
                                  padding: 12px;
                                  border-radius: 8px;
                                  margin-top: 18px;
                 }

                 @media (max-width: 900px) {
                                  .container {
                                                   flex-direction: column;
                                                   padding: 20px;
                                  }

                                  .sermon-list,
                                  .sermon-display {
                                                   flex: 1 1 100%;
                                  }
                 }
                 </style>
</head>

<body>

                 <div class="page-hero">
                                  <h1>UGBC Ayat Church Sermons & Programs</h1>
                                  <p>Listen, watch, and be encouraged — browse our latest messages.</p>
                 </div>

                 <div class="container">
                                  <!-- Sermon List -->
                                  <div class="sermon-list">
                                                   <h2><i class="fa-solid fa-church"></i> Latest Sermons</h2>

                                                   <?php if ($sermons && count($sermons) > 0): ?>
                                                   <?php foreach ($sermons as $sermon): ?>
                                                   <div class="sermon-item">
                                                                    <h3><?php echo htmlspecialchars($sermon['title']); ?>
                                                                    </h3>
                                                                    <div class="meta">
                                                                                     <i class="fa-solid fa-user"></i>
                                                                                     <?php echo htmlspecialchars($sermon['speaker']); ?>
                                                                                     &nbsp; | &nbsp;
                                                                                     <i
                                                                                                      class="fa-solid fa-calendar-days"></i>
                                                                                     <?php echo date("F j, Y", strtotime($sermon['program_date'])); ?>
                                                                    </div>
                                                                    <a class="watch-btn"
                                                                                     href="sermons.php?id=<?php echo (int)$sermon['id']; ?>">Watch
                                                                                     / Listen</a>
                                                   </div>
                                                   <?php endforeach; ?>
                                                   <?php else: ?>
                                                   <p>No sermons available yet.</p>
                                                   <?php endif; ?>
                                  </div>

                                  <!-- Sermon Display -->
                                  <div class="sermon-display">
                                                   <h2><i class="fa-solid fa-play-circle"></i> Sermon Player</h2>

                                                   <?php if ($selected_sermon): ?>
                                                   <h3><?php echo htmlspecialchars($selected_sermon['title']); ?></h3>
                                                   <p><strong>Speaker:</strong>
                                                                    <?php echo htmlspecialchars($selected_sermon['speaker']); ?>
                                                   </p>
                                                   <p><strong>Date:</strong>
                                                                    <?php echo date("F j, Y", strtotime($selected_sermon['program_date'])); ?>
                                                   </p>

                                                   <?php
        $url = isset($selected_sermon['media_url']) ? trim($selected_sermon['media_url']) : '';

        // If it's a YouTube URL, try to extract ID and embed
        $isYouTube = false;
        $youtubeEmbed = '';
        if ($url !== '') {
            if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
                $isYouTube = true;
                // try several common patterns to extract ID
                if (preg_match('/(?:v=|\/embed\/|youtu\.be\/)([a-zA-Z0-9_-]{6,20})/', $url, $m)) {
                    $videoId = $m[1];
                    $youtubeEmbed = 'https://www.youtube.com/embed/' . $videoId;
                } else {
                    // fallback: attempt to parse query
                    $parsed = parse_url($url);
                    if (!empty($parsed['query'])) {
                        parse_str($parsed['query'], $qs);
                        if (!empty($qs['v'])) {
                            $videoId = $qs['v'];
                            $youtubeEmbed = 'https://www.youtube.com/embed/' . $videoId;
                        }
                    }
                }
            }
        }

        if ($isYouTube && $youtubeEmbed !== '') {
            // embed youtube iframe
            echo '<iframe src="' . htmlspecialchars($youtubeEmbed) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        } else {
            // not YouTube — use local MP4 or audio
            if (!empty($url) && strtolower(pathinfo($url, PATHINFO_EXTENSION)) === 'mp4') {
                echo '<video controls autoplay><source src="' . htmlspecialchars($url) . '" type="video/mp4">Your browser does not support the video tag.</video>';
            } elseif (!empty($url) && (strtolower(pathinfo($url, PATHINFO_EXTENSION)) === 'mp3' || $selected_sermon['media_type'] === 'audio')) {
                echo '<audio controls autoplay style="width:100%;"><source src="' . htmlspecialchars($url) . '" type="audio/mpeg">Your browser does not support the audio element.</audio>';
            } elseif (!empty($url)) {
                // unknown extension — try video tag first, then audio
                echo '<video controls autoplay style="max-height:480px;"><source src="' . htmlspecialchars($url) . '">Your browser does not support the video tag.</video>';
            } else {
                echo '<p style="color:#666;">No media available for this sermon.</p>';
            }
        }
        ?>

                                                   <div class="share-buttons">
                                                                    <?php $pageUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
                                                                    <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($pageUrl); ?>"
                                                                                     target="_blank" rel="noopener">
                                                                                     <i
                                                                                                      class="fa-brands fa-facebook-f"></i>
                                                                                     Share
                                                                    </a>
                                                                    <a class="yt" href="https://www.youtube.com/results?search_query=<?php echo urlencode($selected_sermon['title']); ?>"
                                                                                     target="_blank" rel="noopener">
                                                                                     <i
                                                                                                      class="fa-brands fa-youtube"></i>
                                                                                     YouTube
                                                                    </a>
                                                   </div>

                                                   <div class="notes">
                                                                    <h4>About this Sermon</h4>
                                                                    <p><?php echo nl2br(htmlspecialchars($selected_sermon['description'])); ?>
                                                                    </p>
                                                   </div>

                                                   <?php else: ?>
                                                   <p>Select a sermon from the left to begin watching or listening.</p>
                                                   <?php endif; ?>

                                                   <div class="programs">
                                                                    <h3><i class="fa-solid fa-calendar"></i> Upcoming
                                                                                     Church Programs</h3>
                                                                    <ul>
                                                                                     <?php foreach ($programs as $program): ?>
                                                                                     <li>
                                                                                                      <strong><?php echo htmlspecialchars($program['title']); ?></strong>
                                                                                                      &nbsp;–&nbsp;
                                                                                                      <?php echo date("M j, Y", strtotime($program['event_date'])); ?>
                                                                                                      &nbsp;@&nbsp;
                                                                                                      <?php echo htmlspecialchars($program['location']); ?>
                                                                                     </li>
                                                                                     <?php endforeach; ?>
                                                                    </ul>
                                                   </div>

                                  </div>
                 </div>

                 <?php include 'footer.php'; ?>

</body>

</html>
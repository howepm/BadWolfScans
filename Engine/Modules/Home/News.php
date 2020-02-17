<?php
  $dbResult = $GLOBALS['Database']['Link']->query(
    'SELECT * FROM `news`
    ORDER BY `posted` DESC
    LIMIT 10'
  );
  $newsItems = '';
  $latestNews = '<ul>';
  if($dbResult->num_rows > 0)
  {
    while($storyInfo = $dbResult->fetch_assoc())
    {
      $StoryTemplate = new Template('news/story');

      $StoryTemplate->SetVariable('News[ID]', $storyInfo['id']);
      $StoryTemplate->SetVariable('News[Title]', $storyInfo['title']);
      $StoryTemplate->SetVariable('News[Content]', $storyInfo['content']);

      $StoryTemplate->SetVariable('News[Posted]', date('D d M Y', strtotime($storyInfo['posted'])));
      $StoryTemplate->SetVariable('News[Modified]', date('D d M Y', strtotime($storyInfo['modified'])));

      $newsItems = $StoryTemplate->GetOutput() . $newsItems;

      $latestNews = '<li class="newStorySidebar"><a href="?module=story&id=' . $storyInfo['id'] . '">'. $storyInfo['title'] . '</a><br><span class="miniSize">Posted '. date('D d M Y', strtotime($storyInfo['posted'])) . '</span></li>'. $latestNews;
    }
    $HomeTemplate->SetVariable('HOMEPAGE_CONTENT', $newsItems);
  }
  else
  {
    $NoneFoundTemplate = new Template('news/NoNewsFound');
    $HomeTemplate->SetVariable('HOMEPAGE_CONTENT', $NoneFoundTemplate->GetOutput());
  }

  $latestNews = $latestNews . '</ul>';

  $HomeTemplate->SetVariable('LatestNews', $latestNews);
?>

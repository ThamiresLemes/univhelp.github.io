<?php exit; ?>
1587822736
SELECT f.*, t.* FROM (phpbb_forums f CROSS JOIN phpbb_topics t) WHERE t.topic_type = 0 AND t.poll_start <> 0 AND t.topic_time <= 1587811936 AND ((1=1 AND t.topic_visibility = 1)) AND f.forum_id = t.forum_id AND t.topic_moved_id = 0 ORDER BY t.topic_time DESC LIMIT 1
6
a:0:{}
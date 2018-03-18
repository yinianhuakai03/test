<?php
    $id = intval($_GET['id']);

    if ($id % 2 == 0){
        echo '{"errCode": 1, "errMsg": "", "info": [{"id": 1, "title": "1晨光文具中性笔0.35签字笔黑色水笔学生办公文具24/30支", "img_url": "http://192.168.2.123/mobile-demo/assets/images/gd.jpg", "price": "25.00", "link_url": "https://www.baidu.com/"},{"id": 2, "title": "2晨光文具中性笔0.35签字笔黑色水笔学生办公文具24/30支", "img_url": "http://192.168.2.123/mobile-demo/assets/images/gd.jpg", "price": "22.00", "link_url": "https://www.baidu.com/"},{"id": 3, "title": "3晨光文具中性笔0.35签字笔黑色水笔学生办公文具24/30支", "img_url": "http://192.168.2.123/mobile-demo/assets/images/gd.jpg", "price": "18.00", "link_url": "https://www.baidu.com/"}]}';
    } else {
    	echo '{"errCode": 1, "errMsg": "", "info": [{"id": 1, "title": "1晨光文具中性笔0.35签字笔黑色水笔学生办公文具24/30支", "img_url": "http://192.168.2.123/mobile-demo/assets/images/gd.jpg", "price": "25.00", "link_url": "https://www.baidu.com/"},{"id": 2, "title": "2晨光文具中性笔0.35签字笔黑色水笔学生办公文具24/30支", "img_url": "http://192.168.2.123/mobile-demo/assets/images/gd.jpg", "price": "22.00", "link_url": "https://www.baidu.com/"}]}';
    }

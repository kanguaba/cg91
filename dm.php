<?php
/*
    // 设置域名列表  
   $domains = ['pp888.shop', 'pp999.shop', 'm.776610.shop'];  
  
   // 获取当前日期的时间戳（仅日期部分，不包括时间）  
   $today = strtotime(date('Y-m-d'));  
  
   // 假设我们从某个固定的日期开始轮换（例如2023-01-01），这可以作为起始点  
   $startDate = strtotime('2024-01-01');  
  
   // 计算从起始日期到今天的总天数  
   $daysPassed = ($today - $startDate) / (60 * 60 * 24);  
  
   // 使用总天数对域名数量取模，得到当前应该使用的域名的索引  
   $domainIndex = intval($daysPassed % count($domains));  
  
   // 从域名列表中获取当前应该使用的域名  
   $currentDomain = $domains[$domainIndex];
   */
// 设置域名列表  
$domains = ['pp888.shop', 'pp999.shop', 'm.776610.shop', '776611.shop'];  
  
// 获取当前日期时间的时间戳（包括日期和时间）  
$currentTime = time();  
  
// 假设我们从某个固定的时间开始轮换（例如2024-01-01 00:00:00），这可以作为起始点  
$startDate = strtotime('2024-01-01 00:00:00');  
  
// 计算从起始时间到当前时间的总秒数  
$secondsPassed = $currentTime - $startDate;  
  
// 将总秒数转换为小时数  
$hoursPassed = floor($secondsPassed / (60 * 60));  
  
// 计算自起始时间以来经过的“4小时块”的数量  
$fourHourBlocksPassed = floor($hoursPassed / 6);  
  
// 使用“4小时块”的数量对域名数量取模，得到当前应该使用的域名的索引  
$domainIndex = $fourHourBlocksPassed % count($domains);  
  
// 从域名列表中获取当前应该使用的域名  
$currentDomain = $domains[$domainIndex];  
  
?>

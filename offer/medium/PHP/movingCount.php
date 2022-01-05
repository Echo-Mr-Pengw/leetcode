<?php
// 剑指 Offer 13. 机器人的运动范围
// 地上有一个m行n列的方格，从坐标 [0,0] 到坐标 [m-1,n-1] 。
//一个机器人从坐标 [0, 0] 的格子开始移动，它每次可以向左、右、上、下移动一格（不能移动到方格外），也不能进入行坐标和列坐标的数位之和大于k的格子。
//例如，当k为18时，机器人能够进入方格 [35, 37] ，因为3+5+3+7=18。但它不能进入方格 [35, 38]，因为3+5+3+8=19。
//请问该机器人能够到达多少个格子？

function movingCount($m, $n, $k)
{
    if ($k == 0) {
        return 1;
    }

    $dx = [0, 1];
    $dy = [1, 0];
    $queue[] = [0, 0];
    $visit[0][0] = true;
    $result = 1;

    while ($queue) {
        $elem = array_pop($queue);
        $elem_x = $elem[0];
        $elem_y = $elem[1];

        for ($i = 0; $i < 2; $i++) {
            $x = $dx[$i] + $elem_x;
            $y = $dy[$i] + $elem_y;

            // 过滤不符合条件的
            if ($x < 0 || $y < 0 ||        // 超出范围
                $x >= $m || $y >= $n ||    // 超出范围
                (isset($visit[$x][$y]) && $visit[$x][$y]) || // 是否访问过
                (getSum($x) + getSum($y)) > $k) {  // 是否超出k
                continue;
            }

            $visit[$x][$y] = true;
            array_push($queue, [$x, $y]);
            $result++;
        }
    }
    return $result;
}

function getSum($num)
{
    $sum = 0;
    while ($num) {
        $sum += $num % 10;
        $num = intval($num / 10);
    }
    return $sum;
}

echo movingCount(1, 2, 1);
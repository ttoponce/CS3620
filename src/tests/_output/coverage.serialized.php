<?php
$coverage = new SebastianBergmann\CodeCoverage\CodeCoverage;
$coverage->setData(array (
    '/app/Domain/Message.php' =>
        array (
            9 =>
                array (
                    0 => 'MessageTest::testSetBody',
                ),
            13 =>
                array (
                    0 => 'MessageTest::testSetBody',
                ),
            14 =>
                array (
                    0 => 'MessageTest::testSetBody',
                ),
        ),
    '/app/Domain/ChatRoom.php' =>
        array (
            11 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomName',
                ),
            15 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomName',
                ),
            16 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomName',
                ),
            20 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomTopic',
                ),
            24 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomTopic',
                ),
            25 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomTopic',
                ),
            29 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                ),
            30 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                ),
            34 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomLeave',
                ),
            35 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomLeave',
                ),
            36 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomLeave',
                ),
            37 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomLeave',
                ),
            40 =>
                array (
                ),
            44 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomListMembers',
                ),
        ),
    '/app/Domain/User.php' =>
        array (
            10 =>
                array (
                    0 => 'UserTest::testUserAlias',
                ),
            14 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomLeave',
                    1 => 'UserTest::testUserSetEmailSuccess',
                ),
            18 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                    3 => 'UserTest::testUserAlias',
                ),
            19 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                    3 => 'UserTest::testUserAlias',
                ),
            23 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                    3 => 'UserTest::testUserSetEmailFailure',
                    4 => 'UserTest::testUserSetEmailSuccess',
                ),
            24 =>
                array (
                    0 => 'UserTest::testUserSetEmailFailure',
                ),
            26 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                    3 => 'UserTest::testUserSetEmailSuccess',
                ),
            27 =>
                array (
                    0 => 'ChatRoomTest::testChatRoomJoin',
                    1 => 'ChatRoomTest::testChatRoomLeave',
                    2 => 'ChatRoomTest::testChatRoomListMembers',
                    3 => 'UserTest::testUserSetEmailSuccess',
                ),
        ),
));
$coverage->setTests(array (
    'ChatRoomTest::testChatRoomName' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'ChatRoomTest::testChatRoomTopic' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'ChatRoomTest::testChatRoomJoin' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'ChatRoomTest::testChatRoomLeave' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'ChatRoomTest::testChatRoomListMembers' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'MessageTest::testSetBody' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'UserTest::testUserSetEmailFailure' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'UserTest::testUserSetEmailSuccess' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
    'UserTest::testUserAlias' =>
        array (
            'size' => 'unknown',
            'status' => 0,
        ),
));

$filter = $coverage->filter();
$filter->setWhitelistedFiles(array (
    '/app/Domain/ChatRoom.php' => true,
    '/app/Domain/Message.php' => true,
    '/app/Domain/User.php' => true,
));

return $coverage;
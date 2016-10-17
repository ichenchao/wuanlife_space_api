#User.ShowMessage

用户消息中心接口-用于接收其他用户发送给用户消息

##接口调用请求说明

接口URL：http://dev.wuanlife.com:800/?service=User.ShowMessage

请求方式：POST

参数说明：

|参数名字   | 类型|  是否必须   | 默认值   | 范围      |  说明|
|:--|:--|:--|:--|:--|:--|
|user_id    |   整型| 必须     ||           最小：1  |  用户ID|
|pn|整型||默认1|消息页码|


##返回说明
|参数|        类型|   说明|
|:--|:--|:--|
|code  |  整型  |操作码，1表示接收成功，0表示没有新消息|
|info   | 数组  |用户消息列表详情,按时间降序排列|
|info.id | 整型| 消息ID|
|info.information | 字符串| 用户消息详情|
|info.createTime |字符串 |创建时间|
|info.status|整型|1未处理 2已同意 3已拒绝 （只有消息类型为01时，才有此字段返回）
|info.messagetype  | 字符串  |消息类型1=>申请消息 2=>其他消息|
|pageCount|整型|总页码
|currentPage|整型|当前页码
|msg |字符串 |提示信息|


##示例

显示用户id=1的消息列表

http://dev.wuanlife.com:800/?service=User.ShowMessage&user_id=92

    JSON：
    {
    "ret": 200,
    "data": {
        "code": 1,
        "info": [
            {
                "id": "2",
                "information": "taotao申请加入测试私密申请2星球。",
                "createTime": "2016-09-24 15:03",
                "status": "1",
                "messagetype": "01"
            },
            {
                "id": "1",
                "information": "taotao申请加入测试私密申请2星球。",
                "createTime": "2016-09-24 15:03",
                "status": "1",
                "messagetype": "01"
            }
        ],
        "pageCount": 1,
        "currentPage": 1,
        "msg": "接收成功"
    },
    "msg": ""
    }
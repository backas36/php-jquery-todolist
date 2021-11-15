## 小作品說明

### 可儲存的todolist
基本功能 新增, 編輯, 刪除, 標記完成/未完成, 清空, filter ，並且可以儲存在後端，所以有做前後端的串接，是使用 php 來寫的。

UI 部分是使用 Bootstrap 來練習，並且使用 jQuery 來寫 JavaScript。 

http://mentor-program.co/mtr04group5/yang36/week12_hw2/index.html
### 心得

- 監聽的時候todo action button 的時候忘記會選到裡面 icon，之前有用但是竟然搞很久才想起來要在 css 裡面加上 pointer-events: none

- 筆記了 remove empty detach 差別，empty和 remove會移除event，detach 不會

- 想不到有什麼方法可以實現紀錄id，本來想用 cookie，可是記得作業內容沒有提到 cookie 所以就偷看老師示範的code才知道有這個 URL.serachParams 可以用 🤭

- 超方便的 jquery getJSON，不然我原本還要寫一次 ajax

- 在php每次都忘記轉換 todosId 為數字

- 原本狀態點在 Show Completed Tasks 下，然後再去新增 todo task後，狀態還是顯示 show completed tasks ，但是底下的 task 是 show all，所以去查了一下怎麼設定 radio checked，邏輯部分一開始有點打結，後來打開了，就是要從新增todo的那個區塊去重新設定哪個 radio 要 checked ，並帶入 render function。

- 清除已完成功能的困難，查了一下怎麼找出所有 isCompleted 的 index ，之後更是卡關，因為要用 splice 刪除不連續的 todo

- 在 todo 編輯 input focus功能 一直沒辦法用成功，後來發現放的順序錯了！ 之後寫程式需要注意程式 flow 順序

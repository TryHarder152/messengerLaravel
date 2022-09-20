const express = require('express');

const app = express();

const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: {
        origin: '*'
    }
});

let chatScroll = document.querySelectorAll('.chat-history');

io.on('connection', (socket) => {
    console.log('connection');

    socket.on('sendChatToServer', (message) => {
        console.log(message);

        console.log(chatScroll);

        chatScroll.forEach(item => {
            item.scroll(0, 200000000);
        });

        //сообщения видят оба пользователя
        io.sockets.emit('sendChatToClient', message);

        // сообщения видит только получатель
        // socket.broadcast.emit('sendChatToClient', message);
    });

    socket.on('disconnect', (socket) => {
        console.log('disconnect');
    });
});

server.listen(3000, () => {
    console.log('server is running');
});

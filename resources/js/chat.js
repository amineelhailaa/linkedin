const chatRoot = document.getElementById('chat-root');

if (chatRoot && window.Echo) {
    const conversationId = chatRoot.dataset.conversationId;
    const authId = Number(chatRoot.dataset.authId);
    const messagesEl = document.getElementById('chat-messages');

    const appendMessage = (payload) => {
        if (!messagesEl) {
            return;
        }

        const isMine = Number(payload.sender?.id) === authId;
        const wrapper = document.createElement('div');
        wrapper.className = `flex ${isMine ? 'justify-end' : 'justify-start'}`;

        const bubble = document.createElement('div');
        bubble.className = `${isMine ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-900'} max-w-[70%] rounded-2xl px-4 py-2`;

        const text = document.createElement('p');
        text.className = 'text-sm';
        text.textContent = payload.text;

        const meta = document.createElement('p');
        meta.className = `mt-1 text-[11px] ${isMine ? 'text-blue-100' : 'text-slate-500'}`;
        const senderName = payload.sender?.name ?? 'User';
        const time = payload.created_at ?? '';
        meta.textContent = `${senderName} · ${time}`.trim();

        bubble.appendChild(text);
        bubble.appendChild(meta);
        wrapper.appendChild(bubble);
        messagesEl.appendChild(wrapper);
    };

    window.Echo.private(`conversation.${conversationId}`)
        .listen('.message.sent', (payload) => {
            appendMessage(payload);
        });
}

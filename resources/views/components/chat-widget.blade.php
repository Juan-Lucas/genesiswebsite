<!-- Floating Chat Widget -->
<div x-data="{
    chatOpen: false,
    messages: [
        { type: 'bot', text: 'Bonjour ! 👋 Comment puis-je vous aider aujourd\'hui ?', time: new Date().toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' }) }
    ],
    newMessage: '',
    sendMessage() {
        if (this.newMessage.trim()) {
            this.messages.push({
                type: 'user',
                text: this.newMessage,
                time: new Date().toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })
            });
            const userMsg = this.newMessage.toLowerCase();
            this.newMessage = '';

            setTimeout(() => {
                let botResponse = 'Merci pour votre message ! Un membre de notre équipe vous répondra bientôt. 😊';

                if (userMsg.includes('prix') || userMsg.includes('tarif') || userMsg.includes('coût')) {
                    botResponse = 'Pour obtenir un devis personnalisé, je vous invite à remplir notre formulaire de contact ou nous appeler au +33 1 23 45 67 89. 💼';
                } else if (userMsg.includes('contact') || userMsg.includes('joindre')) {
                    botResponse = 'Vous pouvez nous contacter par email à contact@genesis.com ou par téléphone au +33 1 23 45 67 89. 📞';
                } else if (userMsg.includes('service') || userMsg.includes('proposez')) {
                    botResponse = 'Nous proposons : Vidéographie 🎬, Graphic Design 🎨, Photographie 📷, Architecture 🏛️, Conception de Logiciels 💻 et Intégration de Progiciels 🖥️. Consultez notre page Services ! 🚀';
                } else if (userMsg.includes('horaire') || userMsg.includes('ouvert')) {
                    botResponse = 'Nous sommes disponibles du lundi au vendredi de 9h à 18h. Pour toute urgence, contactez-nous par email ! ⏰';
                } else if (userMsg.includes('bonjour') || userMsg.includes('salut') || userMsg.includes('hello')) {
                    botResponse = 'Bonjour ! 😊 Comment puis-je vous assister aujourd\'hui ?';
                }

                this.messages.push({
                    type: 'bot',
                    text: botResponse,
                    time: new Date().toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' })
                });

                setTimeout(() => {
                    const chatMessages = document.getElementById('chatMessages');
                    if (chatMessages) {
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    }
                }, 100);
            }, 1000);
        }
    }
}" class="fixed bottom-6 right-6 z-50">

    <!-- Chat Button -->
    <button @click="chatOpen = !chatOpen"
            class="group relative w-16 h-16 bg-gradient-genesis hover:shadow-genesis-500/50 rounded-full shadow-2xl transition-all duration-300 hover:scale-110 flex items-center justify-center"
            :class="{ 'scale-0': chatOpen }">
        <!-- Pulse animation -->
        <span class="absolute inline-flex h-full w-full rounded-full bg-genesis-blue-400 opacity-75 animate-ping"></span>

        <!-- Chat Icon -->
        <svg class="w-8 h-8 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>

        <!-- Notification Badge -->
        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs font-bold rounded-full flex items-center justify-center animate-bounce">
            1
        </span>
    </button>

    <!-- Chat Window -->
    <div x-show="chatOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         class="absolute bottom-20 right-0 w-80 max-w-[calc(100vw-3rem)] max-h-[500px] bg-white dark:bg-gray-800 rounded-2xl shadow-2xl border border-gray-200 dark:border-gray-700 overflow-hidden"
         style="display: none;">

        <!-- Chat Header -->
        <div class="bg-gradient-genesis p-3 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="relative">
                    <div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <!-- Online indicator -->
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full"></span>
                </div>
                <div>
                    <h3 class="text-white font-bold text-sm">Genesis Support</h3>
                    <p class="text-white/80 text-xs">En ligne</p>
                </div>
            </div>
            <button @click="chatOpen = false" class="text-white/80 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div id="chatMessages" class="h-64 overflow-y-auto p-3 space-y-3 bg-gray-50 dark:bg-gray-900">
            <template x-for="(message, index) in messages" :key="index">
                <div :class="message.type === 'user' ? 'flex justify-end' : 'flex justify-start'">
                    <div :class="message.type === 'user' ? 'order-2' : 'order-1'" class="flex flex-col max-w-xs">
                        <div :class="message.type === 'user'
                                ? 'bg-gradient-genesis text-white rounded-2xl rounded-tr-sm'
                                : 'bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-700 rounded-2xl rounded-tl-sm'"
                             class="px-4 py-3 shadow-sm">
                            <p class="text-sm leading-relaxed" x-text="message.text"></p>
                        </div>
                        <span :class="message.type === 'user' ? 'text-right' : 'text-left'"
                              class="text-xs text-gray-500 dark:text-gray-400 mt-1 px-2"
                              x-text="message.time"></span>
                    </div>
                </div>
            </template>
        </div>

        <!-- Chat Input -->
        <div class="p-4 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
            <form @submit.prevent="sendMessage" class="flex gap-2">
                <input x-model="newMessage"
                       type="text"
                       placeholder="Écrivez votre message..."
                       class="flex-1 px-4 py-3 bg-gray-100 dark:bg-gray-700 border-0 rounded-xl text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-genesis-blue-500 transition-all"
                       @keydown.enter="sendMessage">
                <button type="submit"
                        class="px-4 py-3 bg-gradient-genesis text-white rounded-xl transition-all duration-300 hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>
            </form>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2 text-center">
                Nous sommes là pour vous aider ! 💬
            </p>
        </div>
    </div>
</div>

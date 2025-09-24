<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SecureVault</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#0f172a',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e40af 50%, #1e293b 100%);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .floating {
            animation: floating 4s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(1deg); }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
        .stagger-6 { animation-delay: 0.6s; }
        .contact-pattern {
            background-image: 
                linear-gradient(45deg, rgba(59, 130, 246, 0.1) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(59, 130, 246, 0.1) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(147, 51, 234, 0.1) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(147, 51, 234, 0.1) 75%);
            background-size: 60px 60px;
            background-position: 0 0, 0 30px, 30px -30px, -30px 0px;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 px-6 py-4 glass-effect" x-data="{ isOpen: false }">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-white to-blue-300 bg-clip-text text-transparent">SecureVault</span>
            </div>
        
            <div class="hidden md:flex space-x-8">
                <a href="#" class="hover:text-blue-400 transition-colors">Accueil</a>
                <a href="#" class="hover:text-blue-400 transition-colors">Fonctionnalités</a>
                <a href="#" class="hover:text-blue-400 transition-colors">Sécurité</a>
                <a href="#" class="text-blue-400 border-b-2 border-blue-400">Contact</a>
            </div>
        
            <div class="hidden md:flex space-x-4">
                <button class="px-4 py-2 text-white hover:text-blue-400 transition-colors">Connexion</button>
                <button class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">S'inscrire</button>
            </div>
        
            <button @click="isOpen = !isOpen" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Mobile menu -->
            <div x-show="isOpen" x-transition class="absolute top-full left-0 right-0 mt-2 mx-6 bg-gray-900/95 rounded-lg border border-gray-700 p-4 md:hidden">
                <div class="flex flex-col space-y-4">
                    <a href="#" class="hover:text-blue-400 transition-colors">Accueil</a>
                    <a href="#" class="hover:text-blue-400 transition-colors">Fonctionnalités</a>
                    <a href="#" class="hover:text-blue-400 transition-colors">Sécurité</a>
                    <a href="#" class="text-blue-400">Contact</a>
                    <hr class="border-gray-700">
                    <button class="text-left hover:text-blue-400 transition-colors">Connexion</button>
                    <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg text-left">S'inscrire</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg pt-32 pb-20 px-6 relative overflow-hidden">
        <div class="absolute inset-0 contact-pattern opacity-30"></div>
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-600/20 rounded-full blur-2xl floating"></div>
            <div class="absolute bottom-20 right-10 w-48 h-48 bg-purple-600/20 rounded-full blur-3xl floating" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-emerald-600/20 rounded-full blur-2xl floating" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mb-8 fade-in-up">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6 fade-in-up stagger-1">
                Contactez
                <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Notre Équipe
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto fade-in-up stagger-2">
                Notre équipe d'experts est là pour répondre à toutes vos questions sur SecureVault et vous accompagner dans la sécurisation de vos données.
            </p>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in-up stagger-3">
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-blue-400 mb-2">< 15min</div>
                    <div class="text-gray-300">Temps de réponse</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-green-400 mb-2">24/7</div>
                    <div class="text-gray-300">Support disponible</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-purple-400 mb-2">98%</div>
                    <div class="text-gray-300">Satisfaction client</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="py-20 px-6 bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Comment nous contacter ?</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Choisissez le canal qui vous convient le mieux</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Email Support -->
                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-1">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-400">Email Support</h3>
                    <p class="text-gray-400 text-sm mb-6">Pour toutes vos questions générales et demandes d'assistance</p>
                    <a href="mailto:support@securevault.com" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors">
                        <span class="mr-2">support@securevault.com</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <!-- Phone Support -->
                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-green-400">Support Téléphonique</h3>
                    <p class="text-gray-400 text-sm mb-6">Assistance immédiate pour les urgences sécurité</p>
                    <a href="tel:+33187653421" class="inline-flex items-center text-green-400 hover:text-green-300 transition-colors">
                        <span class="mr-2">+33 1 87 65 34 21</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <!-- Live Chat -->
                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-3">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-purple-400">Chat en Direct</h3>
                    <p class="text-gray-400 text-sm mb-6">Discussion instantanée avec nos experts techniques</p>
                    <button class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors">
                        <span class="mr-2">Démarrer le chat</span>
                        <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                    </button>
                </div>

                <!-- Enterprise -->
                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-yellow-400">Solutions Entreprise</h3>
                    <p class="text-gray-400 text-sm mb-6">Pour les besoins spécifiques et personnalisations</p>
                    <a href="mailto:enterprise@securevault.com" class="inline-flex items-center text-yellow-400 hover:text-yellow-300 transition-colors">
                        <span class="mr-2">enterprise@securevault.com</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Envoyez-nous un Message</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Remplissez le formulaire ci-dessous et nous vous répondrons rapidement</p>
            </div>

            <div x-data="contactForm()" class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50 fade-in-up stagger-2">
                <form @submit.prevent="submitForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-300 mb-2">Prénom *</label>
                            <input 
                                type="text" 
                                id="firstName" 
                                x-model="form.firstName"
                                required
                                class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="Votre prénom"
                            >
                        </div>
                        
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-300 mb-2">Nom *</label>
                            <input 
                                type="text" 
                                id="lastName" 
                                x-model="form.lastName"
                                required
                                class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="Votre nom"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email *</label>
                            <input 
                                type="email" 
                                id="email" 
                                x-model="form.email"
                                required
                                class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="votre@email.com"
                            >
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Téléphone</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                x-model="form.phone"
                                class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"
                                placeholder="+33 1 23 45 67 89"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Entreprise</label>
                        <input 
                            type="text" 
                            id="company" 
                            x-model="form.company"
                            class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300"
                            placeholder="Nom de votre entreprise"
                        >
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Sujet *</label>
                        <select 
                            id="subject" 
                            x-model="form.subject"
                            required
                            class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white transition-all duration-300"
                        >
                            <option value="">Sélectionnez un sujet</option>
                            <option value="general">Question générale</option>
                            <option value="technical">Support technique</option>
                            <option value="security">Question sécurité</option>
                            <option value="billing">Facturation</option>
                            <option value="enterprise">Solutions entreprise</option>
                            <option value="partnership">Partenariat</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message *</label>
                        <textarea 
                            id="message" 
                            rows="6" 
                            x-model="form.message"
                            required
                            class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition-all duration-300 resize-none"
                            placeholder="Décrivez votre demande en détail..."
                        ></textarea>
                    </div>

                    <div class="flex items-start space-x-3">
                        <input 
                            type="checkbox" 
                            id="consent" 
                            x-model="form.consent"
                            required
                            class="mt-1 w-4 h-4 bg-gray-700 border-gray-600 rounded focus:ring-2 focus:ring-blue-500"
                        >
                        <label for="consent" class="text-sm text-gray-300">
                            J'accepte que mes données personnelles soient collectées et traitées conformément à la 
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">politique de confidentialité</a> 
                            de SecureVault. *
                        </label>
                    </div>

                    <div class="text-center">
                        <button 
                            type="submit" 
                            :disabled="loading"
                            :class="loading ? 'opacity-50 cursor-not-allowed' : 'hover:from-blue-700 hover:to-purple-700 transform hover:scale-105'"
                            class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl text-lg font-semibold transition-all duration-300 shadow-2xl"
                        >
                            <span x-show="!loading">Envoyer le Message</span>
                            <span x-show="loading" class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Envoi en cours...
                            </span>
                        </button>
                    </div>

                    <!-- Success Message -->
                    <div x-show="success" x-transition class="mt-4 p-4 bg-green-600/20 border border-green-600/30 rounded-lg">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <p class="text-green-400 font-semibold">Message envoyé avec succès ! Nous vous répondrons sous 24h.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-6 bg-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Questions Fréquentes</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Trouvez rapidement les réponses à vos questions</p>
            </div>

            <div x-data="faqData()" class="space-y-4">
                <template x-for="(faq, index) in faqs" :key="index">
                    <div class="bg-gray-900/50 rounded-xl border border-gray-700/50 fade-in-up" :class="'stagger-' + (index + 1)">
                        <button 
                            @click="toggle(index)"
                            class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-900/70 transition-all duration-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50"
                        >
                            <span class="font-semibold text-lg" x-text="faq.question"></span>
                            <svg 
                                :class="faq.open ? 'rotate-180' : ''"
                                class="w-5 h-5 text-gray-400 transition-transform duration-300" 
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="faq.open" x-transition class="px-6 pb-4">
                            <p class="text-gray-400" x-text="faq.answer"></p>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Office Location -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Notre Siège Social</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Venez nous rendre visite</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8 fade-in-up stagger-1">
                    <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-blue-400">Adresse</h3>
                                <p class="text-gray-300">
                                    SecureVault SAS<br>
                                    42 Avenue des Champs-Élysées<br>
                                    75008 Paris, France
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-600 to-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-green-400">Horaires</h3>
                                <p class="text-gray-300">
                                    Lundi - Vendredi : 9h00 - 18h00<br>
                                    Samedi : 9h00 - 12h00<br>
                                    Dimanche : Fermé<br>
                                    <span class="text-sm text-gray-400 mt-2 block">Support 24h/7j disponible en ligne</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2 text-purple-400">Contact Direct</h3>
                                <p class="text-gray-300">
                                    <strong>Téléphone :</strong> +33 1 87 65 34 21<br>
                                    <strong>Email :</strong> contact@securevault.com<br>
                                    <strong>Urgences :</strong> +33 1 87 65 34 00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Placeholder -->
                <div class="fade-in-up stagger-2">
                    <div class="bg-gray-800/30 rounded-2xl p-4 border border-gray-700/30 h-96 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Plan Interactif</h3>
                            <p class="text-gray-400 text-sm mb-4">Carte disponible sur demande</p>
                            <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                                Voir l'itinéraire
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 px-6 gradient-bg">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mb-8 fade-in-up">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 fade-in-up stagger-1">
                Prêt à Commencer ?
            </h2>
            <p class="text-xl text-gray-300 mb-8 fade-in-up stagger-2">
                Notre équipe est là pour vous accompagner dans la sécurisation de vos données. Contactez-nous dès aujourd'hui !
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up stagger-3">
                <button class="px-8 py-4 bg-white text-gray-900 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Démarrer l'Essai Gratuit
                </button>
                <button class="px-8 py-4 glass-effect rounded-xl text-lg font-semibold hover:bg-white/20 transition-all duration-300">
                    Planifier une Démo
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 px-6 border-t border-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">SecureVault</span>
                    </div>
                    <p class="text-gray-400">Votre coffre-fort numérique de confiance pour une sécurité maximale de vos données sensibles.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Produit</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Fonctionnalités</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Sécurité</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Intégrations</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Entreprise</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Carrières</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Statut</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Communauté</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                © 2024 SecureVault. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        // Contact Form Component
        function contactForm() {
            return {
                form: {
                    firstName: '',
                    lastName: '',
                    email: '',
                    phone: '',
                    company: '',
                    subject: '',
                    message: '',
                    consent: false
                },
                loading: false,
                success: false,

                submitForm() {
                    this.loading = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        this.loading = false;
                        this.success = true;
                        
                        // Reset form
                        this.form = {
                            firstName: '',
                            lastName: '',
                            email: '',
                            phone: '',
                            company: '',
                            subject: '',
                            message: '',
                            consent: false
                        };
                        
                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            this.success = false;
                        }, 5000);
                    }, 2000);
                }
            };
        }

        // FAQ Component
        function faqData() {
            return {
                faqs: [
                    {
                        question: "Comment fonctionne le chiffrement SecureVault ?",
                        answer: "SecureVault utilise le chiffrement AES-256, le même standard utilisé par les gouvernements et institutions financières. Chaque fichier est chiffré avec une clé unique avant d'être stocké, garantissant que même nous ne pouvons pas accéder à vos données.",
                        open: false
                    },
                    {
                        question: "Mes données sont-elles vraiment sécurisées ?",
                        answer: "Absolument. Nous appliquons une architecture zéro-confiance avec chiffrement bout en bout, authentification multi-facteurs, et surveillance continue. Nos centres de données sont certifiés ISO 27001 et SOC 2 Type II.",
                        open: false
                    },
                    {
                        question: "Que se passe-t-il si j'oublie mon mot de passe ?",
                        answer: "Vous pouvez réinitialiser votre mot de passe via email. Cependant, en raison de notre architecture de sécurité, nous ne pouvons pas récupérer vos données si vous perdez à la fois votre mot de passe et votre clé de récupération. C'est pourquoi nous recommandons fortement de sauvegarder votre clé de récupération.",
                        open: false
                    },
                    {
                        question: "Puis-je partager des fichiers de manière sécurisée ?",
                        answer: "Oui, SecureVault propose un système de partage sécurisé avec des liens à durée limitée, protection par mot de passe, et contrôle d'accès granulaire. Vous pouvez également définir des permissions spécifiques pour chaque utilisateur.",
                        open: false
                    },
                    {
                        question: "Quelle est la taille maximale des fichiers ?",
                        answer: "La taille maximale par fichier est de 5 GB pour les comptes standard et 50 GB pour les comptes Enterprise. Il n'y a pas de limite sur le nombre de fichiers que vous pouvez stocker.",
                        open: false
                    },
                    {
                        question: "SecureVault est-il conforme RGPD ?",
                        answer: "Oui, SecureVault est entièrement conforme au RGPD. Nous respectons tous vos droits en matière de protection des données, incluant le droit d'accès, de rectification, de suppression et de portabilité de vos données.",
                        open: false
                    }
                ],

                toggle(index) {
                    this.faqs[index].open = !this.faqs[index].open;
                }
            };
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.backgroundColor = 'rgba(15, 23, 42, 0.9)';
            } else {
                nav.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
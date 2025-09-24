<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sécurité - SecureVault</title>
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
        .security-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, #1e40af 1px, transparent 1px),
                radial-gradient(circle at 75% 75%, #7c3aed 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: 0 0, 25px 25px;
            opacity: 0.1;
        }
        .pulse-ring {
            animation: pulseRing 3s cubic-bezier(0.4, 0.0, 0.6, 1) infinite;
        }
        @keyframes pulseRing {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(2.4);
                opacity: 0;
            }
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
                <a href="#" class="text-blue-400 border-b-2 border-blue-400">Sécurité</a>
                <a href="#" class="hover:text-blue-400 transition-colors">Contact</a>
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
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg pt-32 pb-20 px-6 relative overflow-hidden">
        <div class="absolute inset-0 security-pattern"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400 rounded-full pulse-ring"></div>
            <div class="absolute top-3/4 right-1/3 w-2 h-2 bg-purple-400 rounded-full pulse-ring" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 right-1/4 w-2 h-2 bg-emerald-400 rounded-full pulse-ring" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full mb-8 fade-in-up">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6 fade-in-up stagger-1">
                Sécurité de Niveau
                <span class="bg-gradient-to-r from-green-400 to-emerald-500 bg-clip-text text-transparent">
                    Militaire
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto fade-in-up stagger-2">
                SecureVault implémente les standards de sécurité les plus avancés de l'industrie pour garantir une protection absolue de vos données sensibles.
            </p>
            
            <!-- Security Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 fade-in-up stagger-3">
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-3xl font-bold text-green-400 mb-2">256-bit</div>
                    <div class="text-gray-300">Chiffrement AES</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-3xl font-bold text-blue-400 mb-2">99.99%</div>
                    <div class="text-gray-300">Disponibilité</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-3xl font-bold text-purple-400 mb-2">0</div>
                    <div class="text-gray-300">Brèche de données</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Framework -->
    <section class="py-20 px-6 bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Architecture de Sécurité Multi-Niveaux</h2>
                <p class="text-gray-400 text-lg max-w-3xl mx-auto fade-in-up stagger-1">
                    Notre approche de défense en profondeur garantit que vos données restent protégées à chaque étape.
                </p>
            </div>

            <div class="relative">
                <!-- Security Layers Diagram -->
                <div class="flex flex-col items-center space-y-8">
                    <!-- Layer 1: Physical -->
                    <div class="w-full max-w-4xl bg-gray-900/50 rounded-2xl p-8 border border-red-500/30 fade-in-up stagger-1">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-pink-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-red-400">Couche 1 - Infrastructure Physique</h3>
                                    <p class="text-gray-400">Centres de données certifiés ISO 27001, accès biométrique, surveillance 24/7</p>
                                </div>
                            </div>
                            <div class="text-red-400 font-mono text-sm">NIVEAU CRITIQUE</div>
                        </div>
                    </div>

                    <!-- Layer 2: Network -->
                    <div class="w-full max-w-3xl bg-gray-900/50 rounded-2xl p-8 border border-orange-500/30 fade-in-up stagger-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-red-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-orange-400">Couche 2 - Sécurité Réseau</h3>
                                    <p class="text-gray-400">Firewall avancé, DDoS protection, VPN, chiffrement TLS 1.3</p>
                                </div>
                            </div>
                            <div class="text-orange-400 font-mono text-sm">NIVEAU ÉLEVÉ</div>
                        </div>
                    </div>

                    <!-- Layer 3: Application -->
                    <div class="w-full max-w-2xl bg-gray-900/50 rounded-2xl p-8 border border-blue-500/30 fade-in-up stagger-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-400">Couche 3 - Sécurité Application</h3>
                                    <p class="text-gray-400">Laravel Security, OWASP compliance, input validation, CSRF protection</p>
                                </div>
                            </div>
                            <div class="text-blue-400 font-mono text-sm">NIVEAU STANDARD</div>
                        </div>
                    </div>

                    <!-- Layer 4: Data -->
                    <div class="w-full max-w-xl bg-gray-900/50 rounded-2xl p-8 border border-green-500/30 fade-in-up stagger-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-green-400">Couche 4 - Chiffrement Données</h3>
                                    <p class="text-gray-400">AES-256, clés rotatives, hachage bcrypt, salt unique</p>
                                </div>
                            </div>
                            <div class="text-green-400 font-mono text-sm">NIVEAU MAX</div>
                        </div>
                    </div>
                </div>

                <!-- Connecting Lines -->
                <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                    <div class="w-px h-full bg-gradient-to-b from-red-500/30 via-orange-500/30 via-blue-500/30 to-green-500/30"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Encryption Details -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Chiffrement Cryptographique Avancé</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Standards militaires et gouvernementaux</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Encryption Specs -->
                <div class="space-y-8 fade-in-up stagger-1">
                    <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">AES-256 Encryption</h3>
                                <p class="text-yellow-400">Advanced Encryption Standard</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 px-4 bg-gray-700/30 rounded-lg">
                                <span class="text-gray-300">Longueur de clé</span>
                                <span class="text-yellow-400 font-mono">256 bits</span>
                            </div>
                            <div class="flex justify-between items-center py-3 px-4 bg-gray-700/30 rounded-lg">
                                <span class="text-gray-300">Taille de bloc</span>
                                <span class="text-yellow-400 font-mono">128 bits</span>
                            </div>
                            <div class="flex justify-between items-center py-3 px-4 bg-gray-700/30 rounded-lg">
                                <span class="text-gray-300">Nombre de rounds</span>
                                <span class="text-yellow-400 font-mono">14 rounds</span>
                            </div>
                            <div class="flex justify-between items-center py-3 px-4 bg-gray-700/30 rounded-lg">
                                <span class="text-gray-300">Résistance brute force</span>
                                <span class="text-yellow-400 font-mono">2^256 combinaisons</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Gestion des Clés</h3>
                                <p class="text-purple-400">Key Management System</p>
                            </div>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <span class="text-gray-300">Rotation automatique des clés</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <span class="text-gray-300">Clés dérivées par utilisateur</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <span class="text-gray-300">HSM (Hardware Security Module)</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                <span class="text-gray-300">Escrow de clés sécurisé</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Visual Encryption Process -->
                <div class="fade-in-up stagger-2">
                    <div class="bg-gray-800/30 rounded-2xl p-8 border border-gray-700/30">
                        <h3 class="text-2xl font-bold text-center mb-8">Processus de Chiffrement</h3>
                        
                        <div class="space-y-6">
                            <!-- Step 1 -->
                            <div class="flex items-center space-x-4 p-4 bg-gray-700/20 rounded-xl">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">1</div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-blue-400">Upload du fichier</h4>
                                    <p class="text-sm text-gray-400">Le fichier est reçu via HTTPS sécurisé</p>
                                </div>
                                <div class="text-2xl">📁</div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-center space-x-4 p-4 bg-gray-700/20 rounded-xl">
                                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold">2</div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-purple-400">Génération de clé unique</h4>
                                    <p class="text-sm text-gray-400">Clé AES-256 générée aléatoirement</p>
                                </div>
                                <div class="text-2xl">🔑</div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-center space-x-4 p-4 bg-gray-700/20 rounded-xl">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold">3</div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-green-400">Chiffrement AES-256</h4>
                                    <p class="text-sm text-gray-400">Données transformées en format illisible</p>
                                </div>
                                <div class="text-2xl">🔐</div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex items-center space-x-4 p-4 bg-gray-700/20 rounded-xl">
                                <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center text-white font-bold">4</div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-yellow-400">Stockage sécurisé</h4>
                                    <p class="text-sm text-gray-400">Sauvegarde en base chiffrée + audit</p>
                                </div>
                                <div class="text-2xl">🛡️</div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center space-x-2 px-4 py-2 bg-green-600/20 rounded-full border border-green-600/30">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-green-400 font-semibold">Fichier protégé à 100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Certifications -->
    <section class="py-20 px-6 bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Certifications & Conformité</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Nous respectons les standards internationaux les plus stricts</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 fade-in-up stagger-1">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold">ISO</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-blue-400">ISO 27001</h3>
                    <p class="text-gray-400 text-sm">Système de management de la sécurité de l'information</p>
                    <div class="mt-4 inline-flex items-center px-3 py-1 bg-blue-600/20 rounded-full">
                        <span class="text-blue-400 text-xs font-semibold">CERTIFIÉ</span>
                    </div>
                </div>

                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 fade-in-up stagger-2">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold">SOC</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-green-400">SOC 2 Type II</h3>
                    <p class="text-gray-400 text-sm">Audit de sécurité, disponibilité et confidentialité</p>
                    <div class="mt-4 inline-flex items-center px-3 py-1 bg-green-600/20 rounded-full">
                        <span class="text-green-400 text-xs font-semibold">VALIDÉ</span>
                    </div>
                </div>

                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 fade-in-up stagger-3">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-xl font-bold">RGPD</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-purple-400">GDPR Compliant</h3>
                    <p class="text-gray-400 text-sm">Conforme au Règlement Général sur la Protection des Données</p>
                    <div class="mt-4 inline-flex items-center px-3 py-1 bg-purple-600/20 rounded-full">
                        <span class="text-purple-400 text-xs font-semibold">CONFORME</span>
                    </div>
                </div>

                <div class="bg-gray-900/50 rounded-2xl p-8 text-center hover:bg-gray-900/70 transition-all duration-300 fade-in-up stagger-4">
                    <div class="w-20 h-20 bg-gradient-to-r from-red-600 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-lg font-bold">FIPS</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-red-400">FIPS 140-2</h3>
                    <p class="text-gray-400 text-sm">Standard cryptographique du gouvernement américain</p>
                    <div class="mt-4 inline-flex items-center px-3 py-1 bg-red-600/20 rounded-full">
                        <span class="text-red-400 text-xs font-semibold">NIVEAU 3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Practices -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 fade-in-up">Pratiques de Sécurité Opérationnelle</h2>
                <p class="text-gray-400 text-lg fade-in-up stagger-1">Notre équipe sécurité travaille 24h/24 pour votre protection</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50 fade-in-up stagger-1">
                    <div class="w-16 h-16 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Tests de Pénétration</h3>
                    <p class="text-gray-400 mb-4">Audits de sécurité trimestriels par des experts externes pour identifier et corriger les vulnérabilités.</p>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-indigo-400 rounded-full"></div>
                            <span>Tests automatisés quotidiens</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-indigo-400 rounded-full"></div>
                            <span>Audit manuel trimestriel</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50 fade-in-up stagger-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Surveillance Continue</h3>
                    <p class="text-gray-400 mb-4">Monitoring en temps réel de tous les accès et activités suspectes avec alertes automatiques.</p>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></div>
                            <span>SIEM avancé</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></div>
                            <span>IA de détection d'anomalies</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-800/50 rounded-2xl p-8 border border-gray-700/50 fade-in-up stagger-3">
                    <div class="w-16 h-16 bg-gradient-to-r from-emerald-600 to-green-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Équipe Sécurité Dédiée</h3>
                    <p class="text-gray-400 mb-4">Experts en cybersécurité disponibles 24h/24 pour répondre aux incidents et maintenir la sécurité.</p>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div>
                            <span>Support 24/7</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div>
                            <span>Réponse incident < 15min</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Guarantee -->
    <section class="py-20 px-6 gradient-bg">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full mb-8 fade-in-up">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 fade-in-up stagger-1">
                Notre Engagement Sécurité
            </h2>
            <p class="text-xl text-gray-300 mb-8 fade-in-up stagger-2">
                Nous garantissons la protection absolue de vos données avec notre approche zéro-confiance et notre architecture de sécurité multicouches.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 fade-in-up stagger-3">
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-green-400 mb-2">100%</div>
                    <div class="text-gray-300">Uptime Garanti</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-blue-400 mb-2">< 1s</div>
                    <div class="text-gray-300">Temps de Réponse</div>
                </div>
                <div class="glass-effect rounded-xl p-6">
                    <div class="text-2xl font-bold text-purple-400 mb-2">24/7</div>
                    <div class="text-gray-300">Surveillance Active</div>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up stagger-4">
                <button class="px-8 py-4 bg-white text-gray-900 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Tester la Sécurité
                </button>
                <button class="px-8 py-4 glass-effect rounded-xl text-lg font-semibold hover:bg-white/20 transition-all duration-300">
                    Documentation Technique
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
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnalités - SecureVault</title>
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
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-10px) rotate(2deg); }
            66% { transform: translateY(5px) rotate(-1deg); }
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
                <a href="#" class="text-blue-400 border-b-2 border-blue-400">Fonctionnalités</a>
                <a href="#" class="hover:text-blue-400 transition-colors">Sécurité</a>
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
        <!-- Floating Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-600/10 rounded-full blur-3xl floating"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl floating" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 fade-in-up">
                Fonctionnalités
                <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Avancées
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto fade-in-up stagger-1">
                Découvrez toutes les capacités de SecureVault pour protéger, organiser et gérer vos données sensibles avec une sécurité de niveau entreprise.
            </p>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="py-20 px-6 bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <!-- Authentication Features -->
            <div class="mb-20">
                <h2 class="text-4xl font-bold text-center mb-4 fade-in-up">Authentification & Sécurité</h2>
                <p class="text-gray-400 text-center text-lg mb-12 fade-in-up stagger-1">Protection multi-niveaux pour votre compte</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-900/50 rounded-2xl p-8 hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-1">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Laravel Breeze Integration</h3>
                        <p class="text-gray-400 mb-6">Système d'authentification robuste avec Laravel Breeze, incluant inscription, connexion, et gestion des sessions sécurisées.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <span>Validation des données avancée</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <span>Protection CSRF intégrée</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                <span>Gestion des mots de passe sécurisée</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-900/50 rounded-2xl p-8 hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-2">
                        <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-pink-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L5.636 5.636"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Protection Anti-Brute Force</h3>
                        <p class="text-gray-400 mb-6">Système intelligent de limitation des tentatives de connexion pour prévenir les attaques par force brute.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                <span>Limite de tentatives par IP</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                <span>Blocage temporaire automatique</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                <span>Notifications d'alertes sécurité</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-900/50 rounded-2xl p-8 hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-3">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Sessions Redis Sécurisées</h3>
                        <p class="text-gray-400 mb-6">Gestion des sessions utilisateurs avec Redis pour des performances optimales et une sécurité renforcée.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <span>Sessions chiffrées en mémoire</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <span>Expiration automatique</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                <span>Multi-sessions sécurisées</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- File Management Features -->
            <div class="mb-20">
                <h2 class="text-4xl font-bold text-center mb-4 fade-in-up">Gestion de Fichiers</h2>
                <p class="text-gray-400 text-center text-lg mb-12 fade-in-up stagger-1">Organisez et protégez vos documents sensibles</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-900/50 rounded-2xl p-8 hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-1">
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-violet-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-semibold mb-4">Upload & Stockage Sécurisé</h3>
                                <p class="text-gray-400 mb-6">Téléchargez vos fichiers en toute sécurité avec chiffrement automatique lors de l'upload.</p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="bg-gray-800/50 rounded-lg p-4">
                                        <div class="text-2xl font-bold text-green-400 mb-1">256-bit</div>
                                        <div class="text-sm text-gray-400">Chiffrement AES</div>
                                    </div>
                                    <div class="bg-gray-800/50 rounded-lg p-4">
                                        <div class="text-2xl font-bold text-blue-400 mb-1">5GB</div>
                                        <div class="text-sm text-gray-400">Taille max fichier</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900/50 rounded-2xl p-8 hover:bg-gray-900/70 transition-all duration-300 border border-gray-700/50 fade-in-up stagger-2">
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 5l2-2 2 2"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-semibold mb-4">Organisation Intelligente</h3>
                                <p class="text-gray-400 mb-6">Système de dossiers et tags pour organiser efficacement vos documents sensibles.</p>
                                <ul class="space-y-3 text-gray-300">
                                    <li class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Dossiers hiérarchiques illimités</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Tags personnalisables</span>
                                    </li>
                                    <li class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Recherche avancée</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Encryption Features -->
            <div class="mb-20">
                <h2 class="text-4xl font-bold text-center mb-4 fade-in-up">Chiffrement & Clés</h2>
                <p class="text-gray-400 text-center text-lg mb-12 fade-in-up stagger-1">Protection cryptographique avancée</p>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="fade-in-up stagger-1">
                        <div class="bg-gray-900/50 rounded-2xl p-8 border border-gray-700/50">
                            <div class="w-20 h-20 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-center mb-4">Clé de Session</h3>
                            <p class="text-gray-400 text-center mb-6">Chaque session utilisateur génère une clé unique pour chiffrer temporairement vos fichiers.</p>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Génération</span>
                                    <span class="text-sm font-mono text-yellow-400">Automatique</span>
                                </div>
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Durée de vie</span>
                                    <span class="text-sm font-mono text-yellow-400">Session active</span>
                                </div>
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Sécurité</span>
                                    <span class="text-sm font-mono text-yellow-400">AES-256</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fade-in-up stagger-2">
                        <div class="bg-gray-900/50 rounded-2xl p-8 border border-gray-700/50">
                            <div class="w-20 h-20 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-center mb-4">VAULT_MASTER_KEY</h3>
                            <p class="text-gray-400 text-center mb-6">Clé maître pour le chiffrement permanent et la sauvegarde à long terme de vos données critiques.</p>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Configuration</span>
                                    <span class="text-sm font-mono text-emerald-400">Environnement</span>
                                </div>
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Durée de vie</span>
                                    <span class="text-sm font-mono text-emerald-400">Permanente</span>
                                </div>
                                <div class="flex justify-between items-center py-2 px-4 bg-gray-800/50 rounded-lg">
                                    <span class="text-sm text-gray-300">Usage</span>
                                    <span class="text-sm font-mono text-emerald-400">Archivage sécurisé</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Audit & Monitoring -->
            <div>
                <h2 class="text-4xl font-bold text-center mb-4 fade-in-up">Audit & Surveillance</h2>
                <p class="text-gray-400 text-center text-lg mb-12 fade-in-up stagger-1">Traçabilité complète de toutes vos actions</p>
                
                <div class="bg-gray-900/50 rounded-2xl p-8 border border-gray-700/50 fade-in-up stagger-1">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Logs d'Activité</h3>
                            <p class="text-gray-400 text-sm">Enregistrement détaillé de toutes les actions effectuées sur vos fichiers : upload, download, modification, suppression.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Horodatage Sécurisé</h3>
                            <p class="text-gray-400 text-sm">Timestamp précis et sécurisé de chaque action pour une traçabilité légale et une conformité réglementaire.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Rapports d'Analyse</h3>
                            <p class="text-gray-400 text-sm">Génération de rapports détaillés sur l'utilisation, les accès et les modifications pour un contrôle optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Stack -->
    <section class="py-20 px-6 bg-gray-900">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4 fade-in-up">Stack Technique</h2>
            <p class="text-gray-400 text-lg mb-12 fade-in-up stagger-1">Technologies modernes pour une performance optimale</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-1">
                    <div class="w-16 h-16 bg-red-600/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-red-400">L</span>
                    </div>
                    <h3 class="font-semibold text-red-400">Laravel 10</h3>
                    <p class="text-gray-400 text-xs mt-1">Framework PHP</p>
                </div>

                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-2">
                    <div class="w-16 h-16 bg-blue-600/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-400">M</span>
                    </div>
                    <h3 class="font-semibold text-blue-400">MySQL</h3>
                    <p class="text-gray-400 text-xs mt-1">Base de données</p>
                </div>

                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-3">
                    <div class="w-16 h-16 bg-red-500/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-red-500">R</span>
                    </div>
                    <h3 class="font-semibold text-red-500">Redis</h3>
                    <p class="text-gray-400 text-xs mt-1">Cache & Sessions</p>
                </div>

                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-4">
                    <div class="w-16 h-16 bg-cyan-600/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-cyan-400">T</span>
                    </div>
                    <h3 class="font-semibold text-cyan-400">Tailwind</h3>
                    <p class="text-gray-400 text-xs mt-1">CSS Framework</p>
                </div>

                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-5">
                    <div class="w-16 h-16 bg-emerald-600/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-emerald-400">A</span>
                    </div>
                    <h3 class="font-semibold text-emerald-400">Alpine.js</h3>
                    <p class="text-gray-400 text-xs mt-1">JavaScript</p>
                </div>

                <div class="bg-gray-800/50 rounded-xl p-6 hover:bg-gray-800/70 transition-all duration-300 fade-in-up stagger-6">
                    <div class="w-16 h-16 bg-purple-600/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-400">V</span>
                    </div>
                    <h3 class="font-semibold text-purple-400">Vite</h3>
                    <p class="text-gray-400 text-xs mt-1">Build Tool</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6 gradient-bg">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 fade-in-up">
                Découvrez Toutes ces Fonctionnalités
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto fade-in-up stagger-1">
                Commencez votre essai gratuit dès aujourd'hui et expérimentez la puissance de SecureVault.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up stagger-2">
                <button class="px-8 py-4 bg-white text-gray-900 rounded-xl text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Essai Gratuit - 30 Jours
                </button>
                <button class="px-8 py-4 glass-effect rounded-xl text-lg font-semibold hover:bg-white/20 transition-all duration-300">
                    Voir la Démo Live
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
</html><?php /**PATH /var/www/html/resources/views/pages/features.blade.php ENDPATH**/ ?>
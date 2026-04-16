<!DOCTYPE html>
<html lang="cs" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Knihovna - Výuková aplikace</title>
</head>
<body class="bg-[#1a1c1e] text-slate-200 min-h-screen font-sans flex flex-col">

    <header class="bg-gradient-to-b from-slate-700 to-slate-900 border-b border-slate-600 shadow-xl">
        <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-bold tracking-tight text-white uppercase italic">
                Aplikace <span class="text-blue-400">Knihovna</span>
            </h1>
            
                      <?php require_once '../app/views/layout/header.php'; ?>

<main class="container mx-auto px-6 py-10 flex-grow flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-light tracking-widest text-slate-300 uppercase">Přihlášení</h2>
            <p class="text-slate-500 italic mt-2 text-sm">Vítejte zpět v naší Knihovně.</p>
        </div>
        
        <div class="bg-slate-800/50 border border-slate-700 rounded-xl shadow-2xl backdrop-blur-sm p-6 md:p-8">
            <form action="<?= BASE_URL ?>/index.php?url=auth/authenticate" method="post">
                
                <div class="space-y-6">
                    <div>
                        <label for="email" class="block text-xs font-semibold text-slate-400 mb-1 uppercase tracking-wider">E-mail</label>
                        <input type="email" id="email" name="email" required autofocus
                               class="w-full bg-slate-900/50 border border-slate-600 rounded-md px-4 py-2 text-slate-200 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-semibold text-slate-400 mb-1 uppercase tracking-wider">Heslo</label>
                        <input type="password" id="password" name="password" required 
                               class="w-full bg-slate-900/50 border border-slate-600 rounded-md px-4 py-2 text-slate-200 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-emerald-600 to-emerald-800 hover:from-emerald-500 hover:to-emerald-700 text-white font-bold py-3 px-4 rounded-md shadow-lg border border-emerald-500 transition-all uppercase tracking-widest text-sm">
                            Přihlásit se
                        </button>
                    </div>
                    
                    <p class="text-center text-slate-500 text-sm border-t border-slate-700 pt-4">
                        Nemáte ještě účet? <a href="<?= BASE_URL ?>/index.php?url=auth/register" class="text-emerald-400 hover:text-white transition-colors">Zaregistrujte se</a>.
                    </p>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require_once '../app/views/layout/footer.php'; ?>
        </div>
    </header>

    <div class="container mx-auto px-6 pt-8">
        <?php if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])): ?>
            <div class="space-y-3">
                <?php foreach ($_SESSION['messages'] as $type => $messages): ?>
                    <?php 
                        $styles = [
                            'success' => 'bg-emerald-900/30 border-emerald-500 text-emerald-400',
                            'error'   => 'bg-rose-900/30 border-rose-500 text-rose-400',
                            'notice'  => 'bg-amber-900/30 border-amber-500 text-amber-400',
                        ];
                        $style = $styles[$type] ?? 'bg-slate-800 border-slate-500 text-slate-300';
                    ?>
                    <?php foreach ($messages as $message): ?>
                        <div class="<?= $style ?> border-l-4 p-4 rounded-r-lg shadow-md animate-fade-in">
                            <p class="font-semibold text-sm italic"><?= htmlspecialchars($message) ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <?php unset($_SESSION['messages']); ?>
            </div>
        <?php endif; ?>
    </div>
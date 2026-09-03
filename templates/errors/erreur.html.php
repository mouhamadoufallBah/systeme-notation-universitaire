<div class="container py-5">
    <style>
        .error-container {
            max-width: 500px;
            margin: 3rem auto;
            font-family: system-ui, -apple-system, sans-serif;
            color: #334155;
            text-align: center;
        }
        .error-card {
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -4px rgba(0, 0, 0, 0.05);
            border: 1px solid #fee2e2;
            padding: 2.5rem 2rem;
        }
        .error-icon-wrapper {
            width: 60px;
            height: 60px;
            background-color: #fee2e2;
            color: #991b1b;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem auto;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .error-card h2 {
            margin: 0 0 0.5rem 0;
            font-weight: 700;
            color: #991b1b;
            font-size: 1.5rem;
        }
        .error-card p {
            color: #64748b;
            margin: 0 0 1.5rem 0;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        .btn-back {
            display: inline-block;
            background-color: #0f172a;
            color: white;
            padding: 0.6rem 1.25rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: background-color 0.2s;
        }
        .btn-back:hover {
            background-color: #1e293b;
            color: white;
        }
    </style>

    <div class="error-container">
        <div class="error-card">
            <div class="error-icon-wrapper">
                !
            </div>
            <h2>Oups, une erreur est survenue</h2>
            <p><?= htmlspecialchars($errorMessage ?? "Une action inattendue s'est produite lors du traitement.") ?></p>
            <a href="javascript:history.back()" class="btn-back">← Retourner en arrière</a>
        </div>
    </div>
</div>
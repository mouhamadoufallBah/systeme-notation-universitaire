<div class="container py-5">
    <style>
        .exam-container {
            max-width: 900px;
            margin: 0 auto;
            font-family: system-ui, -apple-system, sans-serif;
            color: #334155;
        }
        .exam-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .exam-header h2 {
            margin: 0;
            font-weight: 700;
            color: #1e293b;
        }
        .btn-add {
            background-color: #2563eb;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.2s;
        }
        .btn-add:hover {
            background-color: #1d4ed8;
            color: white;
        }
        .exam-card {
            background: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .exam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .exam-table th {
            background-color: #f8fafc;
            color: #64748b;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        .exam-table td {
            padding: 1rem;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }
        .exam-table tr:hover {
            background-color: #f8fafc;
        }
        .badge-success {
            background-color: #dcfce7;
            color: #166534;
            padding: 0.25rem 0.6rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .badge-danger {
            background-color: #fee2e2;
            color: #991b1b;
            padding: 0.25rem 0.6rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .btn-detail {
            color: #475569;
            border: 1px solid #cbd5e1;
            padding: 0.25rem 0.75rem;
            border-radius: 0.375rem;
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.2s;
        }
        .btn-detail:hover {
            background-color: #f1f5f9;
            color: #0f172a;
        }
    </style>

    <div class="exam-container">
        <div class="exam-header">
            <div>
                <h2>Liste des copies</h2>
                <p style="color: #64748b; margin: 0.25rem 0 0 0;">Historique des examens et pénalités.</p>
            </div>
            <a href="/copies/create" class="btn-add">+ Nouvelle soumission</a>
        </div>

        <div class="exam-card">
            <table class="exam-table">
                <thead>
                    <tr>
                        <th>Note Brute</th>
                        <th>Note Finale</th>
                        <th>Pénalité / Retard</th>
                        <th>Date de dépôt</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($copies)): ?>
                        <tr>
                            <td colspan="5" style="text-align: center; color: #64748b; padding: 2rem;">Aucune copie enregistrée pour le moment.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($copies as $copie): ?>
                            <tr>
                                <td><strong><?= htmlspecialchars($copie->noteBrute) ?></strong></td>
                                <td style="color: #166534; font-weight: 700;"><?= htmlspecialchars($copie->noteFinale) ?></td>
                                <td>
                                    <span class="<?= $copie->estEnRetard ? 'badge-danger' : 'badge-success' ?>">
                                        <?= htmlspecialchars($copie->penaliteAppliquee) ?> 
                                    </span>
                                </td>
                                <td style="color: #64748b;"><?= htmlspecialchars($copie->dateDepot) ?></td>
                                <td style="text-align: right;">
                                    <a href="/copies/<?= $copie->id ?>" class="btn-detail">Détail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
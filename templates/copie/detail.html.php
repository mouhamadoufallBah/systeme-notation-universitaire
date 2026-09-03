<div class="container py-5">
    <style>
        .exam-detail-container {
            max-width: 600px;
            margin: 0 auto;
            font-family: system-ui, -apple-system, sans-serif;
            color: #334155;
        }
        .exam-detail-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .exam-detail-header h2 {
            margin: 0;
            font-weight: 700;
            color: #1e293b;
        }
        .btn-back {
            color: #475569;
            background-color: #f1f5f9;
            border: 1px solid #cbd5e1;
            padding: 0.4rem 0.8rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.2s;
        }
        .btn-back:hover {
            background-color: #e2e8f0;
            color: #0f172a;
        }
        .exam-detail-card {
            background: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
        }
        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 0.85rem 0;
            border-bottom: 1px solid #f1f5f9;
        }
        .detail-item:last-child {
            border-bottom: none;
        }
        .detail-label {
            color: #64748b;
            font-weight: 500;
        }
        .detail-value {
            font-weight: 600;
            color: #1e293b;
        }
        .text-penalty {
            color: #991b1b;
        }
        .text-success-score {
            color: #166534;
        }
    </style>

    <div class="exam-detail-container">
        <div class="exam-detail-header">
            <h2>Détail de la copie</h2>
            <a href="/copies" class="btn-back">← Retour à la liste</a>
        </div>

        <?php if (isset($copie) && $copie): ?>
            <div class="exam-detail-card">
                <div class="detail-item">
                    <span class="detail-label">Note Brute</span>
                    <span class="detail-value"><?= htmlspecialchars($copie->noteBrute) ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Note Finale</span>
                    <span class="detail-value text-success-score"><?= htmlspecialchars($copie->noteFinale) ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Pénalité Appliquée</span>
                    <span class="detail-value text-penalty"><?= htmlspecialchars($copie->penaliteAppliquee) ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Date de dépôt</span>
                    <span class="detail-value" style="color: #64748b;"><?= htmlspecialchars($copie->dateDepot) ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Date limite</span>
                    <span class="detail-value" style="color: #64748b;"><?= htmlspecialchars($copie->dateLimite) ?></span>
                </div>
            </div>
        <?php else: ?>
            <div class="exam-detail-card" style="text-align: center; color: #64748b;">
                <p>Copie introuvable.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
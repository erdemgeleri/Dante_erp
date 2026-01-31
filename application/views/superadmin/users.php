<?php 
    $page_title = 'Kullanıcı Yönetimi';
    $user_name = 'Super Admin';
    $user_initials = 'SA';
    $user_role = 'Administrator';
    
    $nav_menu = [
        ['label' => 'Dashboard', 'url' => site_url('superadmin/dashboard')],
        ['label' => 'Kullanıcılar', 'url' => site_url('superadmin/users')],
        ['label' => 'İzinler', 'url' => site_url('superadmin/permissions')],
        ['label' => 'Ayarlar', 'url' => site_url('superadmin/settings')]
    ];
?>

<?php $this->load->view('partials/header'); ?>

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .page-header h1 {
        font-size: 24px;
        font-weight: 700;
        color: #1a1a1a;
    }

    .page-header p {
        color: #666;
        font-size: 13px;
        margin: 0;
    }

    .header-actions {
        display: flex;
        gap: 12px;
    }

    .btn {
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        white-space: nowrap;
    }

    .btn-primary {
        background: #2563eb;
        color: white;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #666;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e8e8e8;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 12px;
    }

    .table-wrapper {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        overflow: hidden;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table thead {
        background: #f8f9fa;
        border-bottom: 2px solid #e0e0e0;
    }

    .table th {
        padding: 12px 16px;
        text-align: left;
        font-size: 12px;
        font-weight: 600;
        color: #1a1a1a;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .table td {
        padding: 14px 16px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 13px;
        color: #1a1a1a;
    }

    .table tbody tr:hover {
        background: #fafafa;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .user-cell {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2563eb, #1e40af);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 600;
        flex-shrink: 0;
    }

    .user-info {
        flex: 1;
    }

    .user-name {
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 2px;
    }

    .user-email {
        font-size: 12px;
        color: #999;
    }

    .badge {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
        white-space: nowrap;
    }

    .badge-admin {
        background: rgba(220, 38, 38, 0.2);
        color: #dc2626;
    }

    .badge-user {
        background: rgba(37, 99, 235, 0.2);
        color: #2563eb;
    }

    .badge-super-admin {
        background: rgba(168, 85, 247, 0.2);
        color: #a855f7;
    }

    .badge-active {
        background: rgba(34, 197, 94, 0.2);
        color: #22c55e;
    }

    .badge-inactive {
        background: rgba(107, 114, 128, 0.2);
        color: #6b7280;
    }

    .actions-cell {
        display: flex;
        gap: 8px;
    }

    .action-btn {
        padding: 6px 10px;
        border: none;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        text-decoration: none;
    }

    .action-btn-edit {
        background: #e6f2ff;
        color: #0066cc;
    }

    .action-btn-edit:hover {
        background: #cce5ff;
    }

    .action-btn-delete {
        background: #fee;
        color: #c33;
    }

    .action-btn-delete:hover {
        background: #fdd;
    }

    .pagination-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        border-top: 1px solid #f0f0f0;
        font-size: 13px;
        color: #666;
        background: white;
    }

    .pagination {
        display: flex;
        gap: 4px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pagination li a,
    .pagination li span {
        padding: 6px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        text-decoration: none;
        color: #666;
        cursor: pointer;
        transition: all 0.2s;
        display: inline-block;
    }

    .pagination li a:hover {
        border-color: #2563eb;
        color: #2563eb;
    }

    .pagination li.active a {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #999;
        background: white;
        border-radius: 8px;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 16px;
        opacity: 0.5;
    }

    .empty-state p {
        margin: 0;
        font-size: 14px;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }

    .modal.active {
        display: flex;
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 8px;
        max-width: 400px;
        width: 90%;
    }

    .modal-header {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
        color: #1a1a1a;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .modal-header i {
        color: #dc2626;
        font-size: 20px;
    }

    .modal-body {
        font-size: 13px;
        color: #666;
        margin-bottom: 24px;
    }

    .modal-footer {
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .header-actions {
            width: 100%;
            flex-direction: column;
        }

        .header-actions .btn {
            width: 100%;
            justify-content: center;
        }

        .table {
            font-size: 12px;
        }

        .table th,
        .table td {
            padding: 10px 12px;
        }

        .user-cell {
            flex-direction: column;
            align-items: flex-start;
        }

        .actions-cell {
            flex-direction: column;
            width: 100%;
        }

        .action-btn {
            width: 100%;
            justify-content: center;
        }

        .pagination-section {
            flex-direction: column;
            gap: 12px;
        }
    }

    @media (max-width: 480px) {
        .table-wrapper {
            overflow-x: auto;
        }

        .table {
            min-width: 600px;
        }
    }
</style>

<div class="page-header">
    <div>
        <h1>Kullanıcı Yönetimi</h1>
        <p>Sistem kullanıcılarını yönetin ve kontrol edin</p>
    </div>
    <div class="header-actions">
        <a href="<?= site_url('superadmin/add_user') ?>" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Yeni Kullanıcı
        </a>
    </div>
</div>



<div class="table-wrapper">
    <?php if(!empty($users)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Kullanıcı</th>
                    <th>E-posta</th>
                    <th>Rol</th>
                    <th>Telefon</th>
                    <th>Adres</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody id="usersTableBody">
                <?php foreach($users as $user): ?>
                    <tr>
                        <td>
                            <div class="user-cell">
                                <div class="user-avatar"><?= substr($user->full_name, 0, 2) ?></div>
                                <div class="user-info">
                                    <div class="user-name"><?= $user->full_name ?></div>
                                    <div class="user-email"><?= $user->username ?></div>
                                </div>
                            </div>
                        </td>
                        <td><?= $user->email ?></td>
                        <td>
                            <span class="badge badge-<?= str_replace('_', '-', $user->role) ?>">
                                <?php 
                                    $roleLabels = [
                                        'super_admin' => 'Super Admin',
                                        'admin' => 'Yönetici',
                                        'user' => 'Kullanıcı'
                                    ];
                                    echo $roleLabels[$user->role] ?? $user->role;
                                ?>
                            </span>
                        </td>
                        <td><?= $user->phone ?: '-' ?></td>
                        <td><?= !empty($user->address) ? substr($user->address, 0, 30) . (strlen($user->address) > 30 ? '...' : '') : '-' ?></td>
                        <td>
                            <div class="actions-cell">
                                <a href="<?= site_url('superadmin/edit_user/' . $user->id) ?>" class="action-btn action-btn-edit">
                                    <i class="fas fa-edit"></i> Düzenle
                                </a>
                                <button type="button" class="action-btn action-btn-delete" onclick="openDeleteModal(<?= $user->id ?>, '<?= htmlspecialchars($user->full_name) ?>')">
                                    <i class="fas fa-trash"></i> Sil
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="empty-state">
            <i class="fas fa-users"></i>
            <p>Henüz kullanıcı kaydı bulunmamaktadır.</p>
        </div>
    <?php endif; ?>
</div>

<?php if(!empty($users)): ?>
    <div class="pagination-section">
        <div>
            Toplam <?= $this->Auth_user_model->count_all() ?> Kullanıcı
        </div>
        <div>
            <?= $pagination ?>
        </div>
    </div>
<?php endif; ?>

<div class="modal" id="deleteModal">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fas fa-exclamation-triangle"></i>
            <span>Silmeyi Onaylayın</span>
        </div>
        <div class="modal-body">
            <strong id="userToDelete"></strong> kullanıcısını silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" onclick="closeDeleteModal()">İptal</button>
            <button class="btn btn-primary" style="background: #dc2626;" onclick="confirmDelete()">
                <i class="fas fa-trash"></i> Sil
            </button>
        </div>
    </div>
</div>

<script>
    let userIdToDelete = null;

    function openDeleteModal(userId, userName) {
        userIdToDelete = userId;
        document.getElementById('userToDelete').textContent = userName;
        document.getElementById('deleteModal').classList.add('active');
    }

    function closeDeleteModal() {
        userIdToDelete = null;
        document.getElementById('deleteModal').classList.remove('active');
    }

    function confirmDelete() {
        if (userIdToDelete) {
            window.location.href = '<?= site_url('superadmin/delete_user/') ?>' + userIdToDelete;
        }
    }

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });
</script>

<?php $this->load->view('partials/footer'); ?>
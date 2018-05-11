<?php

use App\Models\Category;

return [
    'title'   => '����',
    'single'  => '����',
    'model'   => Category::class,

    // �� CRUD �����ĵ���Ȩ�޿��ƣ�����������ָ��Ĭ��Ϊͨ��
    'action_permissions' => [
        // ɾ��Ȩ�޿���
        'delete' => function () {
            // ֻ��վ������ɾ���������
            return Auth::user()->hasRole('Founder');
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => '����',
            'sortable' => false,
        ],
        'description' => [
            'title'    => '����',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => '����',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'name' => [
            'title' => '����',
        ],
        'description' => [
            'title' => '����',
            'type'  => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '���� ID',
        ],
        'name' => [
            'title' => '����',
        ],
        'description' => [
            'title' => '����',
        ],
    ],
    'rules'   => [
        'name' => 'required|min:1|unique:categories'
    ],
    'messages' => [
        'name.unique'   => '�����������ݿ������ظ�����ѡ���������ơ�',
        'name.required' => '��ȷ����������һ���ַ�����',
    ],
];
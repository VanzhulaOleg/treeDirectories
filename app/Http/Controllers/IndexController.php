<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tree;

class indexController extends Controller
{
    public function index()
    {
        $dataTrees = Tree::all();
        return view('index', compact('dataTrees'));
    }

    public function store(Request $request)
    {
        $data = $request->path;
        $dir_path = $data;
        $isValid = $this->checkIsValid($dir_path);
        $tree = '';
        if ($isValid) {
            $tree = $this->getTree($dir_path);
//            return view('show', compact(['tree', 'isValid']));
            $treeData = Tree::firstOrNew(
                ['path' => $data],
                ['path' => $data, 'json_value' => $tree]
            );
            $treeData->save();

            return redirect('/');
        } else{
            return redirect()->back()->with('error', 'Please, input correct address');
        }

    }

    public function show($id)
    {
        $listTree = Tree::findOrFail($id);
        $tree = json_decode($listTree->json_value, true);
        return view('show', compact('tree'));
    }
    public function delete($id)
    {
        $listTree = Tree::findOrFail($id);
        $listTree->delete();
        return redirect('/')->with('success', 'deleted successful');
    }

    public function checkIsValid($dir_path)
    {
        if (is_dir($dir_path)) {
            return true;
        }
        return false;
    }

    public function getTree($dir_path)
    {
        $rdi = new \RecursiveDirectoryIterator($dir_path);
        $rii = new \RecursiveIteratorIterator($rdi);
        $tree = [];

        foreach ($rii as $splFileInfo) {
            $file_name = $splFileInfo->getFilename();
            // Skip hidden files and directories.
            if ($file_name[0] === '.') {
                continue;
            }
            $path = $splFileInfo->isDir() ? array($file_name => array()) : array($file_name);
            for ($depth = $rii->getDepth() - 1; $depth >= 0; $depth--) {
                $path = array($rii->getSubIterator($depth)->current()->getFilename() => $path);
            }
            $tree = array_merge_recursive($tree, $path);
        }
        return json_encode($tree);
    }

}

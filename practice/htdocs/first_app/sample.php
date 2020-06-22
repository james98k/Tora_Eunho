$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']
// 보통 수퍼글로벌 변수를 이런식으로 줄여 사용한다.
// DOCUMENT_ROOT는 웹 문서 트리의 루트를 가리킨다.
 
@ $fp = fopen("$DOCUMENT_ROOT/../first_app/1.txt",'ab'); // @fopen도 가능
if(!$fp) {
    echo 'Could not processed!</body></html>';
    exit;
}
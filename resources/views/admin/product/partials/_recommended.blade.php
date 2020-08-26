    @if(isset($product))
        <option value="1"  @if ($product->recommended == 1) selected @endif > Yes</option>
        <option value="0"  @if ($product->recommended == 0) selected @endif >No</option>
    @else
        <option value="1"> Yes</option>
        <option value="0">No</option>
    @endif

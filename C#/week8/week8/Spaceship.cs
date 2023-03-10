public class Spaceship
{
    public string Name { get; }
    public int Size { get; }

    private Stack<Cargo> _storage = new Stack<Cargo>();

    public Spaceship(string name, int size)
    {
        Name = name;
        Size = size;
    }

    //
    // TODO
    //
    // public void AddCargo(Cargo item) {  }
    
    public bool AddCargo(Cargo item)
    {
        if (item.Size + _storage.Sum(c => c.Size) <= Size)
        {
            _storage.Push(item);
            return true;
        }
        else
        {
            return false;
        }
    }
    // public Cargo RemoveCargo() { }
    public void ListCargo()
    {
        foreach (var cargo in _storage)
        {
            Console.WriteLine(cargo.Description + " " + cargo.Size);
        }
    }
    // public void ListCargo() { }
    public Cargo RemoveCargo()
    {
        if (_storage.Count == 0)
        {
            return null;
        }
        else
        {
            return _storage.Pop();
        }
    }
    
    public void MoveCargoTo(Spaceship spaceship)
    {
        while (_storage.Count > 0 && spaceship.AddCargo(_storage.Peek()))
        {
            if (spaceship.AddCargo(_storage.Peek()))
            {
                _storage.Pop();
                spaceship.AddCargo(_storage.Peek());
            }
            else
            {
                break;
            }
        }
    }
}